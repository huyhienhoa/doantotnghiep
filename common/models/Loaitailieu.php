<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%loaitailieu}}".
 *
 * @property int $id
 * @property string $ma
 * @property string $name
 *
 * @property Bangtheodoiketquahoctap[] $bangtheodoiketquahoctaps
 * @property Congtacnghiencuukh[] $congtacnghiencuukhs
 * @property CtdtDchp[] $ctdtDchps
 * @property DbtlDcotLtPcct[] $dbtlDcotLtPccts
 * @property HdgdTkbBpcgd[] $hdgdTkbBpcgds
 * @property Ketquadanhgiahocphan[] $ketquadanhgiahocphans
 * @property Lichgiangday[] $lichgiangdays
 * @property NhdtDa[] $nhdtDas
 * @property QuydinhQuychedaotao[] $quydinhQuychedaotaos
 * @property Tailieubomon[] $tailieubomons
 * @property TdKtKl[] $tdKtKls
 * @property ThongbaoQuyetdinh[] $thongbaoQuyetdinhs
 */
class Loaitailieu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%loaitailieu}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ma', 'name'], 'required', 'message' => 'Chưa điền {attribute}'],
            [['ma'], 'string', 'max' => 20],
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
            'ma' => 'Mã loại tài liệu',
            'name' => 'Tên loại tài liệu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBangtheodoiketquahoctaps()
    {
        return $this->hasMany(Bangtheodoiketquahoctap::className(), ['loaitailieu_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCongtacnghiencuukhs()
    {
        return $this->hasMany(Congtacnghiencuukh::className(), ['loaitailieu_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCtdtDchps()
    {
        return $this->hasMany(CtdtDchp::className(), ['loaitailieu_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDbtlDcotLtPccts()
    {
        return $this->hasMany(DbtlDcotLtPcct::className(), ['loaitailieu_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHdgdTkbBpcgds()
    {
        return $this->hasMany(HdgdTkbBpcgd::className(), ['loaitailieu_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKetquadanhgiahocphans()
    {
        return $this->hasMany(Ketquadanhgiahocphan::className(), ['loaitailieu_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLichgiangdays()
    {
        return $this->hasMany(Lichgiangday::className(), ['loaitailieu_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNhdtDas()
    {
        return $this->hasMany(NhdtDa::className(), ['loaitailieu_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuydinhQuychedaotaos()
    {
        return $this->hasMany(QuydinhQuychedaotao::className(), ['loaitailieu_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTailieubomons()
    {
        return $this->hasMany(Tailieubomon::className(), ['loaitailieu_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTdKtKls()
    {
        return $this->hasMany(TdKtKl::className(), ['loaitailieu_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThongbaoQuyetdinhs()
    {
        return $this->hasMany(ThongbaoQuyetdinh::className(), ['loaitailieu_id' => 'id']);
    }
}
