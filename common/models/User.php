<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Exception;
use yii\db\Expression;
use yii\web\IdentityInterface;
use yii\db;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $vaitro
 * @property string $password write-only password
 * @property string $role
 */
class User extends ActiveRecord implements IdentityInterface
{
    public $password_hash_confirm,$old_password;
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
//    public function behaviors()
//    {
//        return [
//            TimestampBehavior::className(),
//        ];
//    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username','password_hash','email','roles_id'], 'required', 'message' => 'Chưa điền {attribute}'],
            [['password_reset_token', 'auth_key', 'status', 'created_at', 'updated_at', 'role','khoa_id'], 'safe'],
             [['password_hash_confirm'],'compare', 'compareAttribute' => 'password_hash','message'=>'Mật khẩu nhập lại mật khẩu không khớp'],
              ['old_password', 'required','on' => 'changepass'],
              ['old_password','validPassword'],
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
        ];
    }
    public function validPassword($attribute, $params)
    {
        if (!Yii::$app->security->validatePassword($this->old_password, Yii::$app->user->identity->password_hash)) {
                $this->addError($attribute, 'Mật khẩu cũ không chính xác.');
            }
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Tên đăng nhập',
            'roles_id'=>'Vai trò',
            'khoa_id'=>'Khoa/Viện'
        ];
    }
    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return boolean
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        $parts = explode('_', $token);
        $timestamp = (int) end($parts);
        return $timestamp + $expire >= time();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    public function getPassword()
    {
        return '';
    }
    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    public function beforeSave($insert)
    {

        if($insert){
            $this->setPassword($this->password_hash);
            $this->generateAuthKey();
            $this->generatePasswordResetToken();
        }
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
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
    public function getRoles()
    {
        return $this->hasOne(Roles::className(), ['id' => 'roles_id']);
    }


    public function getVaitro()
    {
        $vaitro = Roles::findOne(Yii::$app->user->identity->roles_id);
        return $vaitro->name;
    }

    public function getDanhsachquyen($controller)
    {
        if (Yii::$app->user->identity->role != 'admin')
            $danhsach = Authitem::findAll(['roles_id'=>Yii::$app->user->identity->roles_id,'khoa_id'=>Yii::$app->user->identity->khoa_id]);
        else
            $danhsach = Authitem::find()->where(['roles_id'=>Yii::$app->user->identity->roles_id])->andWhere('khoa_id is null')->all();
        $action = [];$controllers = [];
        foreach ($danhsach as $key => $value) {

            $action[$value->auth->controller]['action'][] = $value->auth->action; 
            $controllers[] = $value->auth->controller;
        }
        if (in_array($controller, $controllers))
            array_push($action[$controller]['action'],'index');
        
        return (in_array($controller, $controllers))?$action[$controller]['action']:[];
    }
}
