<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%giangvien}}".
 *
 * @property int $id
 * @property string $magiangvien
 * @property string $tengiangvien
 * @property int $bomon_id
 *
 * @property Bangtheodoiketquahoctap[] $bangtheodoiketquahoctaps
 * @property Congtacnghiencuukh[] $congtacnghiencuukhs
 * @property Bomon $bomon
 * @property Khenthuong[] $khenthuongs
 * @property Kiluat[] $kiluats
 * @property Lichgiangday[] $lichgiangdays
 */
class Giangvien extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%giangvien}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['magiangvien', 'tengiangvien', 'bomon_id'], 'required', 'message' => 'Chưa điền {attribute}'],
            [['bomon_id'], 'integer'],
            [['magiangvien'], 'string', 'max' => 10],
            [['tengiangvien'], 'string', 'max' => 45],
            [['magiangvien'], 'unique'],
            [['bomon_id'], 'exist', 'skipOnError' => true, 'targetClass' => Bomon::className(), 'targetAttribute' => ['bomon_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'magiangvien' => 'Mã giảng viên',
            'tengiangvien' => 'Tên giảng viên',
            'bomon_id' => 'Bộ môn',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBangtheodoiketquahoctaps()
    {
        return $this->hasMany(Bangtheodoiketquahoctap::className(), ['giangvien_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCongtacnghiencuukhs()
    {
        return $this->hasMany(Congtacnghiencuukh::className(), ['giangvien_id' => 'id']);
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
    public function getKhenthuongs()
    {
        return $this->hasMany(Khenthuong::className(), ['giangvien_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKiluats()
    {
        return $this->hasMany(Kiluat::className(), ['giangvien_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLichgiangdays()
    {
        return $this->hasMany(Lichgiangday::className(), ['giangvien_id' => 'id']);
    }
}
