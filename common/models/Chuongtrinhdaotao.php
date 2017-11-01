<?php

namespace common\models;

use Yii;
use yii\db\Expression;
use yii\web\UploadedFile;

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
            [['name', 'trinhdo_id', 'hinhthucdaotao_id', 'khoa_id', 'chuyennganh_id'], 'required', 'message' => 'Chưa điền {attribute}'],
            [['ngaybanhanh', 'created_at', 'updated_at'], 'safe'],
            [['trinhdo_id', 'hinhthucdaotao_id', 'khoa_id', 'chuyennganh_id', 'CTDT_DCHP_id'], 'integer'],
            [['name'], 'string', 'max' => 100],
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
            'name' => 'Tên',
            'ngaybanhanh' => 'Ngày ban hành',
            'cosodaotao' => 'Cơ sở đào tạo',
            'quyetdinhso' => 'Quyết định số',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhật',
            'filedinhkem' => 'File đính kèm',
            'trinhdo_id' => 'Trình độ',
            'hinhthucdaotao_id' => 'Hình thức đào tạo',
            'khoa_id' => 'Khoa',
            'chuyennganh_id' => 'Chuyên ngành',
            'CTDT_DCHP_id' => 'Loại tài liệu',
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

    public function beforeSave($insert)
    {
        $file = UploadedFile::getInstance($this,'filedinhkem');
        if(is_null($file)){
            if($insert){
                $this->filedinhkem ='nofile.jpg';
            }
            else{
                $old = Chuongtrinhdaotao::findOne($this->id);
                $this->filedinhkem = $old->filedinhkem;
            }
        }
        else{
            if(!$insert){
                $old = Chuongtrinhdaotao::findOne($this->id);
                if($old->filedinhkem != 'nofile.jpg'){
                    $path = dirname(dirname(__DIR__)).'/files/'.$old->filedinhkem;
                    unlink($path);
                }
            }
            $fileName = time().myFuncs::sinhDuongDan($file->name);
            $path = dirname(dirname(__DIR__)).'/files/'.$fileName;
            $file->saveAs($path);
            $this->filedinhkem = $fileName;

        }
        if($insert)
            $this->created_at = new Expression("NOW()");
        else
            $this->updated_at = new Expression("NOW()");
        $this->	CTDT_DCHP_id = 1;
        $this->ngaybanhanh = myFuncs::dayMonthYeartoYearMonthDay($this->ngaybanhanh);
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }

    public function beforeDelete()
    {
        $file = $this->filedinhkem;
        if($file != 'nofile.jpg');
        $path = dirname(dirname(__DIR__)).'/files'.$file;
        if(is_file($path))
            unlink($path);
        return parent::beforeDelete(); // TODO: Change the autogenerated stub
    }
}
