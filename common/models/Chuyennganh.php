<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%chuyennganh}}".
 *
 * @property int $id
 * @property string $ma
 * @property string $name
 * @property int $khoa_id
 *
 * @property Chuongtrinhdaotao[] $chuongtrinhdaotaos
 * @property Khoa $khoa
 */
class Chuyennganh extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%chuyennganh}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ma', 'name', 'khoa_id'], 'required', 'message' => 'Chưa điền {attribute}'],
            [['khoa_id'], 'integer'],
            [['ma'], 'string', 'max' => 20],
            [['name'], 'string', 'max' => 100],
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
            'ma' => 'Mã chuyên ngành',
            'name' => 'Tên chuyên ngành',
            'khoa_id' => 'Khoa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChuongtrinhdaotaos()
    {
        return $this->hasMany(Chuongtrinhdaotao::className(), ['chuyennganh_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKhoa()
    {
        return $this->hasOne(Khoa::className(), ['id' => 'khoa_id']);
    }
}
