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

class myFuncs
{
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

    public  static function getTinhTrang($str){
        if($str=='conhang')
            return 'Còn hàng';
        return 'Hết Hàng';
    }
    public static function getNoiBat($str){
        if($str==1)
            return 'Nổi bật';
        return 'Không nổi bật';
    }
    public static function getBanChay($str){
        if($str==1)
            return 'Bán chạy';
        return 'Không bán chạy';
    }
    /**
    *@param $dsHinhAnh HinhAnhHangHoa[]
    */
    public static function viewHinhanhhanghoa($dsHinhAnh){
        $str="";
        foreach ($dsHinhAnh as $hinhAnhHangHoa){
            $str.= Html::img('../../images/'.$hinhAnhHangHoa->file,['width'=>'200px']);
        }
        return $str;
    }
        
    public static function viewLogo($model){
        $str="";
        $str.=Html::img('../../images/'.$model->logo,['width'=>'100px']);
        return $str;
    }
//    public static function sendMail($noidung,$diachinhan,$tieude){
//        $mailer=new Mailer();
//        $mailer->transport=[
//            'class'=>'Swift_SmtpTransport',
//            'host'=>'smtp.gmail.com',
//            'username'=>'huyhienhoacnt@gmail.com',
//            'password'=>'doideodep',
//            'port'=>'587',// or 465
//            'encryption'=>'tls',//or ssl
//
//        ];
//        $mailer->compose()->setFrom('huyhienhoacnt@gmail.com')
//            ->setCharset('utf8')
//            ->setHtmlBody($noidung)
//            ->setTo($diachinhan)
//            ->setSubject($tieude)
//            ->send();
//
//    }

    public static function VndText($amount)
    {
        if($amount <=0)
        {
            return $textnumber="Tiền phải là số nguyên dương lớn hơn số 0";
        }
        $Text=array("không", "một", "hai", "ba", "bốn", "năm", "sáu", "bảy", "tám", "chín");
        $TextLuythua =array("","nghìn", "triệu", "tỷ", "ngàn tỷ", "triệu tỷ", "tỷ tỷ");
        $textnumber = "";
        $length = strlen($amount);

        for ($i = 0; $i < $length; $i++)
            $unread[$i] = 0;

        for ($i = 0; $i < $length; $i++)
        {
            $so = substr($amount, $length - $i -1 , 1);

            if ( ($so == 0) && ($i % 3 == 0) && ($unread[$i] == 0)){
                for ($j = $i+1 ; $j < $length ; $j ++)
                {
                    $so1 = substr($amount,$length - $j -1, 1);
                    if ($so1 != 0)
                        break;
                }

                if (intval(($j - $i )/3) > 0){
                    for ($k = $i ; $k <intval(($j-$i)/3)*3 + $i; $k++)
                        $unread[$k] =1;
                }
            }
        }

        for ($i = 0; $i < $length; $i++)
        {
            $so = substr($amount,$length - $i -1, 1);
            if ($unread[$i] ==1)
                continue;

            if ( ($i% 3 == 0) && ($i > 0))
                $textnumber = $TextLuythua[$i/3] ." ". $textnumber;

            if ($i % 3 == 2 )
                $textnumber = 'trăm ' . $textnumber;

            if ($i % 3 == 1)
                $textnumber = 'mươi ' . $textnumber;


            $textnumber = $Text[$so] ." ". $textnumber;
        }

        //Phai de cac ham replace theo dung thu tu nhu the nay
        $textnumber = str_replace("không mươi", "lẻ", $textnumber);
        $textnumber = str_replace("lẻ không", "", $textnumber);
        $textnumber = str_replace("mươi không", "mươi", $textnumber);
        $textnumber = str_replace("một mươi", "mười", $textnumber);
        $textnumber = str_replace("mươi năm", "mươi lăm", $textnumber);
        $textnumber = str_replace("mươi một", "mươi mốt", $textnumber);
        $textnumber = str_replace("mười năm", "mười lăm", $textnumber);

        return ucfirst($textnumber." đồng chẵn");
    }
    public static function TitleMinicart(){
        $str='';
        if(\Yii::$app->session->get('tongsoluong')){
            $str=\Yii::$app->session->get('tongsoluong');
            $str.='</span>';

        }
        else
            $str='0';
        return $str;
    }

    public static function contentMinicart(){
        $str='';
        if(\Yii::$app->session->get('giohang')){
            /**
             * @var $giohang \common\models\Hanghoa[]
             */
            $giohang=\Yii::$app->session->get('giohang');
            $soluongchitiet=\Yii::$app->session->get('soluongchitiet');
            $tongsoluong=\Yii::$app->session->get('tongsoluong');
            $tongtien=\Yii::$app->session->get('tongtien');
            $li='';
            foreach ($giohang as $hanghoa){
                $path=Url::toRoute(['site/chitiethanghoa','path'=>$hanghoa->duongdan]);
                $dongia=number_format($hanghoa->dongia,0,',','.');
                $li.= <<<HTML
<li class="product-info">
                                        <div class="p-left">
                                            <a href="#" class="remove_link" id="btnRemoveProduct_{$hanghoa->duongdan}"></a>
                                            <a href="{$path}">
                                                <img class="img-responsive" src="images/{$hanghoa->hinhanhhanghoas[0]->file}" >
                                            </a>
                                        </div>
                                        <div class="p-right">
                                            <p class="p-name">{$hanghoa->tenhang}</p>
                                            <p class="p-rice">{$dongia} vnđ</p>
                                            <p>số lượng: {$soluongchitiet[$hanghoa->id]}</p>
                                        </div>
                                    </li>

HTML;
            $pathCheckout=Url::toRoute(['site/thanhtoan']);
            $tongtien1=number_format($tongtien,0,'','.');
            }

            $str = <<<HTML
            
                <div class="cart-block">
                        <div class="cart-block-content">
                            <h5 class="cart-title">{$tongsoluong} mặt hàng trong giỏ hàng</h5>
                            <div class="cart-block-list">
                                <ul> 
                                   {$li}
                                </ul>
                            </div>
                            <div class="toal-cart">
                                <span>Tổng</span>
                                <span class="toal-price pull-right">{$tongtien1} vnđ</span>
                            </div>
                            <div class="cart-buttons">
                                <a href="{$pathCheckout}" class="btn-check-out">Thanh toán</a>
                            </div>
                        </div>
                    </div>
HTML;
            return $str;
        }else
            return $str;
    }

    public static function sendMail($noidung,$diachinhan,$tieude){
        $mailer=new Mailer();
        $mailer->transport=[
            'class'=>'Swift_SmtpTransport',
            'host'=>'smtp.gmail.com',
            'username'=>'huyhienhoacnt@gmail.com',
            'password'=>'doideodep',
            'port'=>'587',// or 465
            'encryption'=>'tls',//or ssl

        ];
        $mailer->compose()->setFrom(['huyhienhoacnt@gmail.com'=>'Kingdom Watch'])
            ->setCharset('utf8')
            ->setHtmlBody($noidung)
            ->setTo($diachinhan)
            ->setSubject($tieude)
            ->send();

    }
}