<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%danhsachvaitro}}".
 *
 * @property string $vaitro
 * @property int $idvaitro
 * @property int $idkhoa
 * @property string $khoa
 */
class Danhsachvaitro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%danhsachvaitro}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idvaitro', 'idkhoa'], 'integer'],
            [['vaitro'], 'string', 'max' => 255],
            [['khoa'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'vaitro' => Yii::t('app', 'Vai trò'),
            'idvaitro' => Yii::t('app', 'Idvaitro'),
            'idkhoa' => Yii::t('app', 'Idkhoa'),
            'khoa' => Yii::t('app', 'Khoa'),
        ];
    }
}
