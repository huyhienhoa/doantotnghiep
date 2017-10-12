<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%hinhthucdaotao}}".
 *
 * @property int $id
 * @property string $name
 *
 * @property Bangtheodoiketquahoctap[] $bangtheodoiketquahoctaps
 * @property Chuongtrinhdaotao[] $chuongtrinhdaotaos
 * @property Lichthi[] $lichthis
 * @property Nganhangdethi[] $nganhangdethis
 * @property ThongbaoQuyetdinh[] $thongbaoQuyetdinhs
 */
class Hinhthucdaotao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hinhthucdaotao}}';
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
            'name' => 'Tên hình thức đào tạo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBangtheodoiketquahoctaps()
    {
        return $this->hasMany(Bangtheodoiketquahoctap::className(), ['hinhthucdaotao_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChuongtrinhdaotaos()
    {
        return $this->hasMany(Chuongtrinhdaotao::className(), ['hinhthucdaotao_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLichthis()
    {
        return $this->hasMany(Lichthi::className(), ['hinhthucdaotao_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNganhangdethis()
    {
        return $this->hasMany(Nganhangdethi::className(), ['hinhthucdaotao_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThongbaoQuyetdinhs()
    {
        return $this->hasMany(ThongbaoQuyetdinh::className(), ['hinhthucdaotao_id' => 'id']);
    }
}
