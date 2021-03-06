<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%nhdt_da}}".
 *
 * @property int $id
 * @property string $name
 * @property int $loaitailieu_id
 *
 * @property Dapan[] $dapans
 * @property Nganhangdethi[] $nganhangdethis
 * @property Loaitailieu $loaitailieu
 */
class NhdtDa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%nhdt_da}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required', 'message' => 'Chưa điền {attribute}'],
            [['loaitailieu_id'], 'integer'],
            [['name'], 'string', 'max' => 50],
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
            'loaitailieu_id' => 'Loại tài liệu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDapans()
    {
        return $this->hasMany(Dapan::className(), ['NHDT_DA_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNganhangdethis()
    {
        return $this->hasMany(Nganhangdethi::className(), ['NHDT_DA_id' => 'id']);
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
        $this->loaitailieu_id = 9;
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }
}
