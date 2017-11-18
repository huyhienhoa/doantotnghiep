<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%auth_item}}".
 *
 * @property int $id
 * @property int $roles_id
 * @property int $auth_id
 * @property int $khoa_id
 *
 * @property AuthChildItem[] $authChildItems
 * @property Auth $auth
 * @property Roles $roles
 * @property Khoa $khoa
 */
class Authitem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%auth_item}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['roles_id'], 'required'],
            [['auth_id'],'safe'],
            [['roles_id', 'khoa_id'], 'integer'],
            [['roles_id'], 'exist', 'skipOnError' => true, 'targetClass' => Roles::className(), 'targetAttribute' => ['roles_id' => 'id']],
            [['khoa_id'], 'exist', 'skipOnError' => true, 'targetClass' => Khoa::className(), 'targetAttribute' => ['khoa_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'roles_id' => 'Vai trò',
            'auth_id' => 'Auth ID',
            'khoa_id' => 'Khoa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuth()
    {
        return $this->hasOne(Auth::className(), ['id' => 'auth_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoles()
    {
        return $this->hasOne(Roles::className(), ['id' => 'roles_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKhoa()
    {
        return $this->hasOne(Khoa::className(), ['id' => 'khoa_id']);
    }
    public function getQuyen($data)
    {
        $quyens = $data;
        $mang = [];
        foreach($quyens as $quyen)
        {
            $mang[] = $quyen->auth_id;
        }
        return $mang;
    }
    public function showQuyen($idvaitro,$idkhoa)
    {
        $quyens = Authitem::findAll(['roles_id'=>$idvaitro,'khoa_id'=>$idkhoa]);
        $danhsachquyen = Auth::find()->where('parent_id is null')->all();
        $str = '';
        if (count($danhsachquyen))
        {
            
            foreach($danhsachquyen as $key=>$quyen)
            {
                $str_child = '';
                $str.= '<label for="">'.$quyen->name.'</label>';
                $str.=   '<div class="form-group"><div class="quyenhan">';
                        foreach($quyen->auths as $item)
                        {
                            if (in_array($item->id,$this->getQuyen($quyens)))
                                $str_child .= '<label><input type="checkbox" name="Authitem[auth_id][]" value="'.$item->id.'" checked=checked disabled>'.$item->name.'</label>';

                            else
                                $str_child .= '<label><input type="checkbox" name="Authitem[auth_id][]" value="'.$item->id.'" disabled>'.$item->name.'</label>';
                        }
                $str .= $str_child;
                $str .= '</div>
                                    </div>';
            }
        }
        return $str;
    }
}
