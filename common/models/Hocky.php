<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%hocky}}".
 *
 * @property int $id
 * @property string $name
 *
 * @property Bangphanconggiangday[] $bangphanconggiangdays
 * @property Bangtheodoiketquahoctap[] $bangtheodoiketquahoctaps
 * @property Debaitaplon[] $debaitaplons
 * @property Decuongontap[] $decuongontaps
 * @property Ketquadanhgiahocphan[] $ketquadanhgiahocphans
 * @property Lichgiangday[] $lichgiangdays
 * @property Lichthi[] $lichthis
 * @property Nganhangdethi[] $nganhangdethis
 * @property Phancongcoithi[] $phancongcoithis
 * @property Thoikhoabieu[] $thoikhoabieus
 */
class Hocky extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hocky}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required', 'message' => 'Chưa điền {attribute}'],
            [['name'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Tên học kỳ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBangphanconggiangdays()
    {
        return $this->hasMany(Bangphanconggiangday::className(), ['hocky_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBangtheodoiketquahoctaps()
    {
        return $this->hasMany(Bangtheodoiketquahoctap::className(), ['hocky_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDebaitaplons()
    {
        return $this->hasMany(Debaitaplon::className(), ['hocky_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDecuongontaps()
    {
        return $this->hasMany(Decuongontap::className(), ['hocky_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKetquadanhgiahocphans()
    {
        return $this->hasMany(Ketquadanhgiahocphan::className(), ['hocky_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLichgiangdays()
    {
        return $this->hasMany(Lichgiangday::className(), ['hocky_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLichthis()
    {
        return $this->hasMany(Lichthi::className(), ['hocky_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNganhangdethis()
    {
        return $this->hasMany(Nganhangdethi::className(), ['hocky_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhancongcoithis()
    {
        return $this->hasMany(Phancongcoithi::className(), ['hocky_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThoikhoabieus()
    {
        return $this->hasMany(Thoikhoabieu::className(), ['hocky_id' => 'id']);
    }
}
