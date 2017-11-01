<?php

namespace common\models;

use Yii;
use yii\db\Expression;
use yii\web\UploadedFile;

/**
 * This is the model class for table "{{%tailieubomon}}".
 *
 * @property int $id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property string $filedinhkem
 * @property int $loaitailieu_id
 * @property int $bomon_id
 *
 * @property Bomon $bomon
 * @property Loaitailieu $loaitailieu
 */
class Tailieubomon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tailieubomon}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'bomon_id'], 'required', 'message' => 'Chưa điền {attribute}'],
            [['created_at', 'updated_at'], 'safe'],
            [['loaitailieu_id', 'bomon_id'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['filedinhkem'], 'string', 'max' => 200],
            [['bomon_id'], 'exist', 'skipOnError' => true, 'targetClass' => Bomon::className(), 'targetAttribute' => ['bomon_id' => 'id']],
            [['loaitailieu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Loaitailieu::className(), 'targetAttribute' => ['loaitailieu_id' => 'id']],
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
            'loaitailieu_id' => 'Loại tài liệu',
            'bomon_id' => 'Bộ môn',
        ];
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
    public function getLoaitailieu()
    {
        return $this->hasOne(Loaitailieu::className(), ['id' => 'loaitailieu_id']);
    }

    public function beforeSave($insert)
    {
        $file = UploadedFile::getInstance($this,'filedinhkem');
        if(is_null($file)){
            if($insert){
                $this->filedinhkem ='nofile.jpg';
            }
            else{
                $old = Tailieubomon::findOne($this->id);
                $this->filedinhkem = $old->filedinhkem;
            }
        }
        else{
            if(!$insert){
                $old = Tailieubomon::findOne($this->id);
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
        $this->loaitailieu_id = 1;
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
