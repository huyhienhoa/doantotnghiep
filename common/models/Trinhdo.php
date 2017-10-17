<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%trinhdo}}".
 *
 * @property int $id
 * @property string $name
 *
 * @property Bangtheodoiketquahoctap[] $bangtheodoiketquahoctaps
 * @property Chuongtrinhdaotao[] $chuongtrinhdaotaos
 * @property Nganhangdethi[] $nganhangdethis
 */
class Trinhdo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%trinhdo}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required', 'message' => 'Chưa điền {attribute}'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Tên trình độ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBangtheodoiketquahoctaps()
    {
        return $this->hasMany(Bangtheodoiketquahoctap::className(), ['trinhdo_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChuongtrinhdaotaos()
    {
        return $this->hasMany(Chuongtrinhdaotao::className(), ['trinhdo_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNganhangdethis()
    {
        return $this->hasMany(Nganhangdethi::className(), ['trinhdo_id' => 'id']);
    }
}
