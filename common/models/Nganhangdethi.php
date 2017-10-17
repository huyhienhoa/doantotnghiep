<?php

namespace common\models;

use Yii;
use yii\db\Expression;
use yii\web\UploadedFile;
/**
 * This is the model class for table "{{%nganhangdethi}}".
 *
 * @property int $id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property string $filedinhkem
 * @property int $namhoc_id
 * @property int $hocky_id
 * @property int $trinhdo_id
 * @property int $hinhthucdaotao_id
 * @property int $monhoc_id
 * @property int $NHDT_DA_id
 *
 * @property Dapan[] $dapans
 * @property NhdtDa $nHDTDA
 * @property Hinhthucdaotao $hinhthucdaotao
 * @property Hocky $hocky
 * @property Monhoc $monhoc
 * @property Namhoc $namhoc
 * @property Trinhdo $trinhdo
 */
class Nganhangdethi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%nganhangdethi}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'namhoc_id', 'hocky_id', 'trinhdo_id', 'hinhthucdaotao_id', 'monhoc_id'], 'required', 'message' => 'Chưa điền {attribute}'],
            [['created_at', 'updated_at'], 'safe'],
            [['namhoc_id', 'hocky_id', 'trinhdo_id', 'hinhthucdaotao_id', 'monhoc_id', 'NHDT_DA_id'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['filedinhkem'], 'string', 'max' => 200],
            [['NHDT_DA_id'], 'exist', 'skipOnError' => true, 'targetClass' => NhdtDa::className(), 'targetAttribute' => ['NHDT_DA_id' => 'id']],
            [['hinhthucdaotao_id'], 'exist', 'skipOnError' => true, 'targetClass' => Hinhthucdaotao::className(), 'targetAttribute' => ['hinhthucdaotao_id' => 'id']],
            [['hocky_id'], 'exist', 'skipOnError' => true, 'targetClass' => Hocky::className(), 'targetAttribute' => ['hocky_id' => 'id']],
            [['monhoc_id'], 'exist', 'skipOnError' => true, 'targetClass' => Monhoc::className(), 'targetAttribute' => ['monhoc_id' => 'id']],
            [['namhoc_id'], 'exist', 'skipOnError' => true, 'targetClass' => Namhoc::className(), 'targetAttribute' => ['namhoc_id' => 'id']],
            [['trinhdo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Trinhdo::className(), 'targetAttribute' => ['trinhdo_id' => 'id']],
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
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhật',
            'filedinhkem' => 'File đính kèm',
            'namhoc_id' => 'Năm học',
            'hocky_id' => 'Học kỳ',
            'trinhdo_id' => 'Trình độ',
            'hinhthucdaotao_id' => 'Hình thức đào tạo',
            'monhoc_id' => 'Môn học',
            'NHDT_DA_id' => 'Loại tài liệu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDapans()
    {
        return $this->hasMany(Dapan::className(), ['nganhangdethi_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNHDTDA()
    {
        return $this->hasOne(NhdtDa::className(), ['id' => 'NHDT_DA_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHinhthucdaotao()
    {
        return $this->hasOne(Hinhthucdaotao::className(), ['id' => 'hinhthucdaotao_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHocky()
    {
        return $this->hasOne(Hocky::className(), ['id' => 'hocky_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMonhoc()
    {
        return $this->hasOne(Monhoc::className(), ['id' => 'monhoc_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNamhoc()
    {
        return $this->hasOne(Namhoc::className(), ['id' => 'namhoc_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrinhdo()
    {
        return $this->hasOne(Trinhdo::className(), ['id' => 'trinhdo_id']);
    }

    public function beforeSave($insert)
    {
        $file = UploadedFile::getInstance($this,'filedinhkem');
        if(is_null($file)){
            if($insert){
                $this->filedinhkem ='nofile.jpg';
            }
            else{
                $old = Nganhangdethi::findOne($this->id);
                $this->filedinhkem = $old->filedinhkem;
            }
        }
        else{
            if(!$insert){
                $old = Nganhangdethi::findOne($this->id);
                if($old->filedinhkem != 'nofile.jpg'){
                    $path = dirname(dirname(__DIR__)).'/files/'.$old->filedinhkem;
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
        $this->	NHDT_DA_id = 1;
//        $this->ngaybanhanh = myFuncs::dayMonthYeartoYearMonthDay($this->ngaybanhanh);
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
