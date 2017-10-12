<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%namhoc}}".
 *
 * @property int $id
 * @property string $name
 *
 * @property Bangphanconggiangday[] $bangphanconggiangdays
 * @property Bangtheodoiketquahoctap[] $bangtheodoiketquahoctaps
 * @property Congtacnghiencuukh[] $congtacnghiencuukhs
 * @property Debaitaplon[] $debaitaplons
 * @property Decuongontap[] $decuongontaps
 * @property Hopdonggiangday[] $hopdonggiangdays
 * @property Ketquadanhgiahocphan[] $ketquadanhgiahocphans
 * @property Khenthuong[] $khenthuongs
 * @property Kiluat[] $kiluats
 * @property Lichgiangday[] $lichgiangdays
 * @property Lichthi[] $lichthis
 * @property Nganhangdethi[] $nganhangdethis
 * @property Phancongcoithi[] $phancongcoithis
 * @property QuydinhQuychedaotao[] $quydinhQuychedaotaos
 * @property Thidua[] $thiduas
 * @property Thoikhoabieu[] $thoikhoabieus
 */
class Namhoc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%namhoc}}';
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
            'name' => 'Tên năm học',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBangphanconggiangdays()
    {
        return $this->hasMany(Bangphanconggiangday::className(), ['namhoc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBangtheodoiketquahoctaps()
    {
        return $this->hasMany(Bangtheodoiketquahoctap::className(), ['namhoc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCongtacnghiencuukhs()
    {
        return $this->hasMany(Congtacnghiencuukh::className(), ['namhoc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDebaitaplons()
    {
        return $this->hasMany(Debaitaplon::className(), ['namhoc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDecuongontaps()
    {
        return $this->hasMany(Decuongontap::className(), ['namhoc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHopdonggiangdays()
    {
        return $this->hasMany(Hopdonggiangday::className(), ['namhoc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKetquadanhgiahocphans()
    {
        return $this->hasMany(Ketquadanhgiahocphan::className(), ['namhoc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKhenthuongs()
    {
        return $this->hasMany(Khenthuong::className(), ['namhoc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKiluats()
    {
        return $this->hasMany(Kiluat::className(), ['namhoc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLichgiangdays()
    {
        return $this->hasMany(Lichgiangday::className(), ['namhoc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLichthis()
    {
        return $this->hasMany(Lichthi::className(), ['namhoc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNganhangdethis()
    {
        return $this->hasMany(Nganhangdethi::className(), ['namhoc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhancongcoithis()
    {
        return $this->hasMany(Phancongcoithi::className(), ['namhoc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuydinhQuychedaotaos()
    {
        return $this->hasMany(QuydinhQuychedaotao::className(), ['namhoc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThiduas()
    {
        return $this->hasMany(Thidua::className(), ['namhoc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThoikhoabieus()
    {
        return $this->hasMany(Thoikhoabieu::className(), ['namhoc_id' => 'id']);
    }
}
