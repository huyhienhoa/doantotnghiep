<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%monhoc}}".
 *
 * @property int $id
 * @property string $tenmonhoc
 * @property string $mamonhoc
 * @property int $sotinchi
 * @property int $bomon_id
 * @property string $thuchanh
 * @property string $baitaplon
 *
 * @property Bangtheodoiketquahoctap[] $bangtheodoiketquahoctaps
 * @property Debaitaplon[] $debaitaplons
 * @property Decuonghocphan[] $decuonghocphans
 * @property Decuongontap[] $decuongontaps
 * @property Ketquadanhgiahocphan[] $ketquadanhgiahocphans
 * @property Lichgiangday[] $lichgiangdays
 * @property Bomon $bomon
 * @property Nganhangdethi[] $nganhangdethis
 */
class Monhoc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%monhoc}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tenmonhoc', 'mamonhoc', 'sotinchi', 'bomon_id'], 'required'],
            [['sotinchi', 'bomon_id'], 'integer'],
            [['thuchanh', 'baitaplon'], 'string'],
            [['tenmonhoc'], 'string', 'max' => 200],
            [['mamonhoc'], 'string', 'max' => 10],
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
            'tenmonhoc' => 'Tenmonhoc',
            'mamonhoc' => 'Mamonhoc',
            'sotinchi' => 'Sotinchi',
            'bomon_id' => 'Bomon ID',
            'thuchanh' => 'Thuchanh',
            'baitaplon' => 'Baitaplon',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBangtheodoiketquahoctaps()
    {
        return $this->hasMany(Bangtheodoiketquahoctap::className(), ['monhoc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDebaitaplons()
    {
        return $this->hasMany(Debaitaplon::className(), ['monhoc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDecuonghocphans()
    {
        return $this->hasMany(Decuonghocphan::className(), ['monhoc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDecuongontaps()
    {
        return $this->hasMany(Decuongontap::className(), ['monhoc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKetquadanhgiahocphans()
    {
        return $this->hasMany(Ketquadanhgiahocphan::className(), ['monhoc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLichgiangdays()
    {
        return $this->hasMany(Lichgiangday::className(), ['monhoc_id' => 'id']);
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
    public function getNganhangdethis()
    {
        return $this->hasMany(Nganhangdethi::className(), ['monhoc_id' => 'id']);
    }
}
