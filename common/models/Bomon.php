<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%bomon}}".
 *
 * @property int $id
 * @property string $tenbomon
 * @property string $mabomon
 * @property int $khoa_id
 *
 * @property Bangphanconggiangday[] $bangphanconggiangdays
 * @property Khoa $khoa
 * @property Giangvien[] $giangviens
 * @property Hopdonggiangday[] $hopdonggiangdays
 * @property Monhoc[] $monhocs
 * @property Phancongcoithi[] $phancongcoithis
 * @property Tailieubomon[] $tailieubomons
 * @property Thidua[] $thiduas
 * @property Thoikhoabieu[] $thoikhoabieus
 */
class Bomon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bomon}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tenbomon', 'mabomon', 'khoa_id'], 'required', 'message' => 'Chưa điền {attribute}'],
            [['khoa_id'], 'integer'],
            [['tenbomon'], 'string', 'max' => 100],
            [['mabomon'], 'string', 'max' => 10],
            [['tenbomon'], 'unique'],
            [['mabomon'], 'unique'],
            [['khoa_id'], 'exist', 'skipOnError' => true, 'targetClass' => Khoa::className(), 'targetAttribute' => ['khoa_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tenbomon' => 'Tên bộ môn',
            'mabomon' => 'Mã bộ môn',
            'khoa_id' => 'Khoa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBangphanconggiangdays()
    {
        return $this->hasMany(Bangphanconggiangday::className(), ['bomon_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKhoa()
    {
        return $this->hasOne(Khoa::className(), ['id' => 'khoa_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGiangviens()
    {
        return $this->hasMany(Giangvien::className(), ['bomon_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHopdonggiangdays()
    {
        return $this->hasMany(Hopdonggiangday::className(), ['bomon_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMonhocs()
    {
        return $this->hasMany(Monhoc::className(), ['bomon_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhancongcoithis()
    {
        return $this->hasMany(Phancongcoithi::className(), ['bomon_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTailieubomons()
    {
        return $this->hasMany(Tailieubomon::className(), ['bomon_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThiduas()
    {
        return $this->hasMany(Thidua::className(), ['bomon_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThoikhoabieus()
    {
        return $this->hasMany(Thoikhoabieu::className(), ['bomon_id' => 'id']);
    }
}
