<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%users}}".
 *
 * @property int $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $auth_key
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $password
 * @property string $quyenhan
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%users}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'status', 'password', 'quyenhan'], 'required', 'message' => 'Chưa điền {attribute}'],
            [['status', 'quyenhan'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['username'], 'string', 'max' => 45],
            [['password_hash', 'password_reset_token', 'email', 'auth_key'], 'string', 'max' => 100],
            [['password'], 'string', 'max' => 30],
            [['username'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Tên tài khoản',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'auth_key' => 'Auth Key',
            'status' => 'Trạng thái',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhật',
            'password' => 'Password',
            'quyenhan' => 'Quyền hạn',
        ];
    }
}
