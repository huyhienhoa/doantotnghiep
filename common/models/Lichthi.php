<?php

namespace common\models;

use Yii;
use yii\db\Expression;
use yii\web\UploadedFile;

/**
 * This is the model class for table "{{%lichthi}}".
 *
 * @property int $id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property string $filedinhkem
 * @property int $hinhthucdaotao_id
 * @property int $hocky_id
 * @property int $namhoc_id
 * @property int $DBTL_DCOT_LT_PCCT_id
 *
 * @property DbtlDcotLtPcct $dBTLDCOTLTPCCT
 * @property Hinhthucdaotao $hinhthucdaotao
 * @property Hocky $hocky
 * @property Namhoc $namhoc
 */
class Lichthi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%lichthi}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['hinhthucdaotao_id', 'hocky_id', 'namhoc_id'], 'required', 'message' => 'Chưa điền {attribute}'],
            [['hinhthucdaotao_id', 'hocky_id', 'namhoc_id', 'DBTL_DCOT_LT_PCCT_id'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['filedinhkem'], 'string', 'max' => 200],
            [['DBTL_DCOT_LT_PCCT_id'], 'exist', 'skipOnError' => true, 'targetClass' => DbtlDcotLtPcct::className(), 'targetAttribute' => ['DBTL_DCOT_LT_PCCT_id' => 'id']],
            [['hinhthucdaotao_id'], 'exist', 'skipOnError' => true, 'targetClass' => Hinhthucdaotao::className(), 'targetAttribute' => ['hinhthucdaotao_id' => 'id']],
            [['hocky_id'], 'exist', 'skipOnError' => true, 'targetClass' => Hocky::className(), 'targetAttribute' => ['hocky_id' => 'id']],
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
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhật',
            'filedinhkem' => 'File đính kèm',
            'hinhthucdaotao_id' => 'Hình thức đào tạo',
            'hocky_id' => 'Học kỳ',
            'namhoc_id' => 'Năm học',
            'DBTL_DCOT_LT_PCCT_id' => 'Loại tài liệu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDBTLDCOTLTPCCT()
    {
        return $this->hasOne(DbtlDcotLtPcct::className(), ['id' => 'DBTL_DCOT_LT_PCCT_id']);
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
                $old = Lichthi::findOne($this->id);
                $this->filedinhkem = $old->filedinhkem;
            }
        }
        else{
            if(!$insert){
                $old = Lichthi::findOne($this->id);
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
        $this->	DBTL_DCOT_LT_PCCT_id = 3;
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