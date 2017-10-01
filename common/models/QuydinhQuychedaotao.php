<?php

namespace common\models;

use Yii;
use yii\db\Expression;
use yii\web\UploadedFile;

/**
 * This is the model class for table "{{%quydinh_quychedaotao}}".
 *
 * @property int $id
 * @property string $name
 * @property string $ngaybanhanh
 * @property string $soquyetdinh
 * @property string $created_at
 * @property string $updated_at
 * @property string $filedinhkem
 * @property int $namhoc_id
 * @property int $loaitailieu_id
 *
 * @property Loaitailieu $loaitailieu
 * @property Namhoc $namhoc
 */
class QuydinhQuychedaotao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%quydinh_quychedaotao}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name','namhoc_id','ngaybanhanh'], 'required',
                'message'=>'{attribute} không được để trống !'
            ],
            [['filedinhkem','created_at', 'updated_at'], 'safe'],
            [['namhoc_id', 'loaitailieu_id'], 'integer'],
            [['name'], 'string', 'max' => 200],
            [['soquyetdinh'], 'string', 'max' => 25],
            [['filedinhkem'], 'string', 'max' => 200],
            [['loaitailieu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Loaitailieu::className(), 'targetAttribute' => ['loaitailieu_id' => 'id']],
            [['namhoc_id'], 'exist', 'skipOnError' => true, 'targetClass' => Namhoc::className(), 'targetAttribute' => ['namhoc_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Tên',
            'ngaybanhanh' => 'Ngày ban hành',
            'soquyetdinh' => 'Quyết định số',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhật',
            'filedinhkem' => 'File đính kèm',
            'namhoc_id' => 'Năm học',
            'loaitailieu_id' => 'Loại tài liệu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLoaitailieu()
    {
        return $this->hasOne(Loaitailieu::className(), ['id' => 'loaitailieu_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNamhoc()
    {
        return $this->hasOne(Namhoc::className(), ['id' => 'namhoc_id']);
    }

    public function beforeSave($insert)
    {
        $file = UploadedFile::getInstance($this,'filedinhkem');
        if(is_null($file)){
            if($insert){
                $this->filedinhkem ='nofile.jpg';
            }
            else{
                $old = QuydinhQuychedaotao::findOne($this->id);
                $this->filedinhkem = $old->filedinhkem;
            }
        }
        else{
            if(!$insert){
                $old = QuydinhQuychedaotao::findOne($this->id);
                if($old->filedinhkem != 'nofile.jpg'){
                    $path = dirname(dirname(__DIR__)).'/files/'.$old->filedinhkem;
                    var_dump($path);exit;
                    unlink($path);
                 }
            }
            $fileName = time().myFuncs::sinhDuongDan($file->name);
            $path = dirname(dirname(__DIR__)).'/files/'.$fileName;
            $file->saveAs($path);
            $this->filedinhkem = $fileName;

        }
        if($insert)
            $this->created_at = new Expression("NOW()");
        else
            $this->updated_at = new Expression("NOW()");
        $this->loaitailieu_id = 1;
        $this->ngaybanhanh = myFuncs::dayMonthYeartoYearMonthDay($this->ngaybanhanh);
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }  
    
    public function beforeDelete()
    {   
        $file = $this->filedinhkem;
        if($file != 'nofile.jpg');
        $path = dirname(dirname(__DIR__)).'/files'.$file;
        if(is_file($path))
            unlink($path);
        return parent::beforeDelete(); // TODO: Change the autogenerated stub
    }

}
