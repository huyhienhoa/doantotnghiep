<?php

namespace common\models;

use Yii;
use yii\db\Expression;
use yii\web\UploadedFile;

/**
 * This is the model class for table "{{%thoikhoabieu}}".
 *
 * @property int $id
 * @property string $name
 * @property int $namhoc_id
 * @property int $hocky_id
 * @property int $bomon_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $filedinhkem
 * @property int $HDGD_TKB_BPCGD__id
 *
 * @property HdgdTkbBpcgd $hDGDTKBBPCGD
 * @property Bomon $bomon
 * @property Hocky $hocky
 * @property Namhoc $namhoc
 */
class Thoikhoabieu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%thoikhoabieu}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['namhoc_id', 'hocky_id', 'bomon_id'], 'required', 'message' => 'Chưa điền {attribute}'],
            [['id', 'namhoc_id', 'hocky_id', 'bomon_id', 'HDGD_TKB_BPCGD__id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 50],
            [['filedinhkem'], 'string', 'max' => 200],
            [['id'], 'unique'],
            [['HDGD_TKB_BPCGD__id'], 'exist', 'skipOnError' => true, 'targetClass' => HdgdTkbBpcgd::className(), 'targetAttribute' => ['HDGD_TKB_BPCGD__id' => 'id']],
            [['bomon_id'], 'exist', 'skipOnError' => true, 'targetClass' => Bomon::className(), 'targetAttribute' => ['bomon_id' => 'id']],
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
            'namhoc_id' => 'Năm học',
            'hocky_id' => 'Học kỳ',
            'bomon_id' => 'Bộ môn',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày sửa',
            'filedinhkem' => 'File đính kèm',
            'HDGD_TKB_BPCGD__id' => 'Loại tài liệu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHDGDTKBBPCGD()
    {
        return $this->hasOne(HdgdTkbBpcgd::className(), ['id' => 'HDGD_TKB_BPCGD__id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBomon()
    {
        return $this->hasOne(Bomon::className(), ['id' => 'bomon_id']);
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
                $old = Thoikhoabieu::findOne($this->id);
                $this->filedinhkem = $old->filedinhkem;
            }
        }
        else{
            if(!$insert){
                $old = Thoikhoabieu::findOne($this->id);
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
        $this->	HDGD_TKB_BPCGD__id = 3;
        //$this->ngaybanhanh = myFuncs::dayMonthYeartoYearMonthDay($this->ngaybanhanh);
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
