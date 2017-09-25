<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%chuongtrinhdaotao}}".
 *
 * @property int $id
 * @property string $name
 * @property string $ngaybanhanh
 * @property string $cosodaotao
 * @property string $quyetdinhso
 * @property string $created_at
 * @property string $updated_at
 * @property string $filedinhkem
 * @property int $trinhdo_id
 * @property int $hinhthucdaotao_id
 * @property int $khoa_id
 * @property int $chuyennganh_id
 * @property int $CTDT_DCHP_id
 *
 * @property CtdtDchp $cTDTDCHP
 * @property Chuyennganh $chuyennganh
 * @property Hinhthucdaotao $hinhthucdaotao
 * @property Khoa $khoa
 * @property Trinhdo $trinhdo
 */
class Chuongtrinhdaotao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%chuongtrinhdaotao}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'trinhdo_id', 'hinhthucdaotao_id', 'khoa_id', 'chuyennganh_id', 'CTDT_DCHP_id'], 'required'],
            [['ngaybanhanh', 'created_at', 'updated_at'], 'safe'],
            [['trinhdo_id', 'hinhthucdaotao_id', 'khoa_id', 'chuyennganh_id', 'CTDT_DCHP_id'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['cosodaotao', 'filedinhkem'], 'string', 'max' => 200],
            [['quyetdinhso'], 'string', 'max' => 45],
            [['CTDT_DCHP_id'], 'exist', 'skipOnError' => true, 'targetClass' => CtdtDchp::className(), 'targetAttribute' => ['CTDT_DCHP_id' => 'id']],
            [['chuyennganh_id'], 'exist', 'skipOnError' => true, 'targetClass' => Chuyennganh::className(), 'targetAttribute' => ['chuyennganh_id' => 'id']],
            [['hinhthucdaotao_id'], 'exist', 'skipOnError' => true, 'targetClass' => Hinhthucdaotao::className(), 'targetAttribute' => ['hinhthucdaotao_id' => 'id']],
            [['khoa_id'], 'exist', 'skipOnError' => true, 'targetClass' => Khoa::className(), 'targetAttribute' => ['khoa_id' => 'id']],
            [['trinhdo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Trinhdo::className(), 'targetAttribute' => ['trinhdo_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'ngaybanhanh' => 'Ngaybanhanh',
            'cosodaotao' => 'Cosodaotao',
            'quyetdinhso' => 'Quyetdinhso',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'filedinhkem' => 'Filedinhkem',
            'trinhdo_id' => 'Trinhdo ID',
            'hinhthucdaotao_id' => 'Hinhthucdaotao ID',
            'khoa_id' => 'Khoa ID',
            'chuyennganh_id' => 'Chuyennganh ID',
            'CTDT_DCHP_id' => 'Ctdt  Dchp ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCTDTDCHP()
    {
        return $this->hasOne(CtdtDchp::className(), ['id' => 'CTDT_DCHP_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChuyennganh()
    {
        return $this->hasOne(Chuyennganh::className(), ['id' => 'chuyennganh_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHinhthucdaotao()
    {
        return $this->hasOne(Hinhthucdaotao::className(), ['id' => 'hinhthucdaotao_id']);
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
    public function getTrinhdo()
    {
        return $this->hasOne(Trinhdo::className(), ['id' => 'trinhdo_id']);
    }
}
