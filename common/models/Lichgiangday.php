<?php

namespace common\models;

use Yii;
use yii\db\Expression;
use yii\web\UploadedFile;

/**
 * This is the model class for table "{{%lichgiangday}}".
 *
 * @property int $id
 * @property string $name
 * @property string $nhomhocphan
 * @property string $filedinhkem
 * @property string $created_at
 * @property string $updated_at
 * @property int $monhoc_id
 * @property int $hocky_id
 * @property int $namhoc_id
 * @property int $giangvien_id
 * @property int $loaitailieu_id
 *
 * @property Giangvien $giangvien
 * @property Hocky $hocky
 * @property Loaitailieu $loaitailieu
 * @property Monhoc $monhoc
 * @property Namhoc $namhoc
 */
class Lichgiangday extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%lichgiangday}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'monhoc_id', 'hocky_id', 'namhoc_id', 'giangvien_id'], 'required', 'message' => 'Chưa điền {attribute}'],
            [['created_at', 'updated_at'], 'safe'],
            [['monhoc_id', 'hocky_id', 'namhoc_id', 'giangvien_id', 'loaitailieu_id'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['nhomhocphan'], 'string', 'max' => 10],
            [['filedinhkem'], 'string', 'max' => 200],
            [['giangvien_id'], 'exist', 'skipOnError' => true, 'targetClass' => Giangvien::className(), 'targetAttribute' => ['giangvien_id' => 'id']],
            [['hocky_id'], 'exist', 'skipOnError' => true, 'targetClass' => Hocky::className(), 'targetAttribute' => ['hocky_id' => 'id']],
            [['loaitailieu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Loaitailieu::className(), 'targetAttribute' => ['loaitailieu_id' => 'id']],
            [['monhoc_id'], 'exist', 'skipOnError' => true, 'targetClass' => Monhoc::className(), 'targetAttribute' => ['monhoc_id' => 'id']],
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
            'nhomhocphan' => 'Nhóm học phần',
            'filedinhkem' => 'File đính kèm',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhật',
            'monhoc_id' => 'Môn học',
            'hocky_id' => 'Học kỳ',
            'namhoc_id' => 'Năm học',
            'giangvien_id' => 'Tên giảng viên',
            'loaitailieu_id' => 'Loại tài liệu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGiangvien()
    {
        return $this->hasOne(Giangvien::className(), ['id' => 'giangvien_id']);
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
    public function getLoaitailieu()
    {
        return $this->hasOne(Loaitailieu::className(), ['id' => 'loaitailieu_id']);
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

    public function beforeSave($insert)
    {
        $file = UploadedFile::getInstance($this,'filedinhkem');
        if(is_null($file)){
            if($insert){
                $this->filedinhkem ='nofile.jpg';
            }
            else{
                $old = Lichgiangday::findOne($this->id);
                $this->filedinhkem = $old->filedinhkem;
            }
        }
        else{
            if(!$insert){
                $old = Lichgiangday::findOne($this->id);
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
        $this->loaitailieu_id = 4;
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
