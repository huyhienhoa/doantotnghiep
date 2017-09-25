<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%khoa}}".
 *
 * @property int $id
 * @property string $makhoa
 * @property string $tenkhoa
 *
 * @property Bomon[] $bomons
 * @property Chuongtrinhdaotao[] $chuongtrinhdaotaos
 * @property Chuyennganh[] $chuyennganhs
 * @property Congtacnghiencuukh[] $congtacnghiencuukhs
 */
class Khoa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%khoa}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['makhoa', 'tenkhoa'], 'required'],
            [['makhoa'], 'string', 'max' => 10],
            [['tenkhoa'], 'string', 'max' => 200],
            [['makhoa'], 'unique'],
            [['tenkhoa'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'makhoa' => 'Makhoa',
            'tenkhoa' => 'Tenkhoa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBomons()
    {
        return $this->hasMany(Bomon::className(), ['khoa_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChuongtrinhdaotaos()
    {
        return $this->hasMany(Chuongtrinhdaotao::className(), ['khoa_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChuyennganhs()
    {
        return $this->hasMany(Chuyennganh::className(), ['khoa_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCongtacnghiencuukhs()
    {
        return $this->hasMany(Congtacnghiencuukh::className(), ['khoa_id' => 'id']);
    }
}
