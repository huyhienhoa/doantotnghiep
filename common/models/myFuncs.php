<?php
/**
 * Created by PhpStorm.
 * User: HungLuongHien
 * Date: 6/28/2016
 * Time: 9:40 AM
 */

namespace common\models;


use common\models\Hinhanhhanghoa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\swiftmailer\Mailer;
use yii;
class myFuncs
{
    public static function dayMonthYeartoYearMonthDay($ngay = "31/12/2016"){
        $arr = explode('/',$ngay);
        return "{$arr[2]}-{$arr[1]}-{$arr[0]}";
    }
    
    public static function yearMonthDaytoDayMonthYear($day = "2016-01-04"){
        $arr = explode('-',$day);
        return "{$arr[2]}/{$arr[1]}/{$arr[0]}";
    }

    public static function getLoaithidua($str){
        if($str==0)
            return 'Tập thể';
        return 'Cá nhân';
    }

    public static function getThuchanh($str){
        if($str=='co')
            return 'Có';
        return 'Không';
    }

    public static function getBTL($str){
        if($str=='co')
            return 'Có';
        return 'Không';
    }

    public static function sinhDuongDan($str){
        $coDau=array("à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă","ằ","ắ"
        ,"ặ","ẳ","ẵ","è","é","ẹ","ẻ","ẽ","ê","ề","ế","ệ","ể","ễ","ì","í","ị","ỉ","ĩ",
            "ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ"
        ,"ờ","ớ","ợ","ở","ỡ",
            "ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ",
            "ỳ","ý","ỵ","ỷ","ỹ",
            "đ",
            "À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă"
        ,"Ằ","Ắ","Ặ","Ẳ","Ẵ",
            "È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ",
            "Ì","Í","Ị","Ỉ","Ĩ",
            "Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ"
        ,"Ờ","Ớ","Ợ","Ở","Ỡ",
            "Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ",
            "Ỳ","Ý","Ỵ","Ỷ","Ỹ",
            "Đ","ê","ù","à");
        $khongDau=array("a","a","a","a","a","a","a","a","a","a","a"
        ,"a","a","a","a","a","a",
            "e","e","e","e","e","e","e","e","e","e","e",
            "i","i","i","i","i",
            "o","o","o","o","o","o","o","o","o","o","o","o"
        ,"o","o","o","o","o",
            "u","u","u","u","u","u","u","u","u","u","u",
            "y","y","y","y","y",
            "d",
            "A","A","A","A","A","A","A","A","A","A","A","A"
        ,"A","A","A","A","A",
            "E","E","E","E","E","E","E","E","E","E","E",
            "I","I","I","I","I",
            "O","O","O","O","O","O","O","O","O","O","O","O"
        ,"O","O","O","O","O",
            "U","U","U","U","U","U","U","U","U","U","U",
            "Y","Y","Y","Y","Y",
            "D","e","u","a");
        $str = str_replace($coDau,$khongDau,$str);
        $str = trim(preg_replace("/\\s+/", " ", $str));
        $str = preg_replace("/[^a-zA-Z0-9 \-\.]/", "", $str);
        $str = strtolower($str);
        return str_replace(" ", '-', $str);;
    }

    public static function tachNam($date){
        $ngay = explode('/', $date);
        $day = array_pop($ngay);
        return $day;

    }

    public static function tachThang($date){
        $ngay = explode('/', $date);
        $day = array_pop($ngay);
        $month = array_pop($ngay);
        return $month;

    }

    public static function tachNgay($date){
        $ngay = explode('/', $date);
        $day = array_pop($ngay);
        $month = array_pop($ngay);
        $nam = array_pop($ngay);
        return $nam;

    }

    public static function checkExtension($input)
    {
        $ext = substr($input,strlen($input)- 3,strlen($input));
        switch ($ext) {
            case 'pdf':
                echo \yii2assets\pdfjs\PdfJs::widget([
                    'url'=> Yii::$app->request->baseUrl.'/files/'.$input
                ]);
                break;
            case 'jpg':
            case 'png':
            case 'gif':
                echo \yii\bootstrap\Html::img(Yii::$app->request->baseUrl.'/files/'.$input,['class'=>'img-responsive']);
                break;
            default:
                break;
        }
    }

}