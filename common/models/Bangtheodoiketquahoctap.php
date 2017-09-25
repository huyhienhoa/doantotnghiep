<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%bangtheodoiketquahoctap}}".
 *
 * @property int $id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property string $nhomhocphan
 * @property string $filedinhkem
 * @property int $giangvien_id
 * @property int $hinhthucdaotao_id
 * @property int $trinhdo_id
 * @property int $monhoc_id
 * @property int $hocky_id
 * @property int $namhoc_id
 * @property int $loaitailieu_id
 *
 * @property Giangvien $giangvien
 * @property Hinhthucdaotao $hinhthucdaotao
 * @property Hocky $hocky
 * @property Loaitailieu $loaitailieu
 * @property Monhoc $monhoc
 * @property Namhoc $namhoc
 * @property Trinhdo $trinhdo
 */
class Bangtheodoiketquahoctap extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bangtheodoiketquahoctap}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'filedinhkem', 'giangvien_id', 'hinhthucdaotao_id', 'trinhdo_id', 'monhoc_id', 'hocky_id', 'namhoc_id', 'loaitailieu_id'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['giangvien_id', 'hinhthucdaotao_id', 'trinhdo_id', 'monhoc_id', 'hocky_id', 'namhoc_id', 'loaitailieu_id'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['nhomhocphan'], 'string', 'max' => 10],
            [['filedinhkem'], 'string', 'max' => 200],
            [['giangvien_id'], 'exist', 'skipOnError' => true, 'targetClass' => Giangvien::className(), 'targetAttribute' => ['giangvien_id' => 'id']],
            [['hinhthucdaotao_id'], 'exist', 'skipOnError' => true, 'targetClass' => Hinhthucdaotao::className(), 'targetAttribute' => ['hinhthucdaotao_id' => 'id']],
            [['hocky_id'], 'exist', 'skipOnError' => true, 'targetClass' => Hocky::className(), 'targetAttribute' => ['hocky_id' => 'id']],
            [['loaitailieu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Loaitailieu::className(), 'targetAttribute' => ['loaitailieu_id' => 'id']],
            [['monhoc_id'], 'exist', 'skipOnError' => true, 'targetClass' => Monhoc::className(), 'targetAttribute' => ['monhoc_id' => 'id']],
            [['namhoc_id'], 'exist', 'skipOnError' => true, 'targetClass' => Namhoc::className(), 'targetAttribute' => ['namhoc_id' => 'id']],
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
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'nhomhocphan' => 'Nhomhocphan',
            'filedinhkem' => 'Filedinhkem',
            'giangvien_id' => 'Giangvien ID',
            'hinhthucdaotao_id' => 'Hinhthucdaotao ID',
            'trinhdo_id' => 'Trinhdo ID',
            'monhoc_id' => 'Monhoc ID',
            'hocky_id' => 'Hocky ID',
            'namhoc_id' => 'Namhoc ID',
            'loaitailieu_id' => 'Loaitailieu ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGiangvien()
    {
        return $this->hasOne(Giangvien::className(), ['id' => 'giangvien_id']);
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
    public function getHocky()
    {
        return $this->hasOne(Hocky::className(), ['id' => 'hocky_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLoaitailieu()
    {
        return $this->hasOne(Loaitailieu::className(), ['id' => 'loaitailieu_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMonhoc()
    {
        return $this->hasOne(Monhoc::className(), ['id' => 'monhoc_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNamhoc()
    {
        return $this->hasOne(Namhoc::className(), ['id' => 'namhoc_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrinhdo()
    {
        return $this->hasOne(Trinhdo::className(), ['id' => 'trinhdo_id']);
    }
}
