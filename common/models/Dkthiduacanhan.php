<?php

namespace common\models;

use Yii;
use yii\db\Expression;

/**
 * This is the model class for table "{{%dkthiduacanhan}}".
 *
 * @property int $id
 * @property string $name
 * @property int $khoa_id
 * @property int $namhoc_id
 * @property string $ngaydk
 * @property string $created_at
 * @property string $updated_at
 * @property string $hoten
 * @property string $ngaysinh
 * @property string $CTNA_GDLT
 * @property string $CTNA_HDTH
 * @property string $CTNA_HDTN
 * @property string $CTNA_CT
 * @property string $CTNA_KN
 * @property string $CTNB_NCKH
 * @property string $CTNB_VGT
 * @property string $CTNB_VCDKH
 * @property string $CTNB_CMNV
 * @property string $CTK_TGPT
 * @property string $CTK_CHPL
 *
 * @property Khoa $khoa
 * @property Namhoc $namhoc
 */
class Dkthiduacanhan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%dkthiduacanhan}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'khoa_id', 'namhoc_id', 'hoten', 'chucvu', 'CTNA_GDLT', 'CTNA_HDTH', 'CTNA_HDTN', 'CTNA_CT', 'CTNA_KN', 'CTNB_NCKH', 'CTNB_VGT', 'CTNB_VCDKH', 'CTNB_CMNV', 'CTK_TGPT', 'CTK_CHPL'], 'required', 'message' => 'Chưa điền {attribute}'],
            [['khoa_id', 'namhoc_id'], 'integer'],
            [['ngaydk', 'created_at', 'updated_at', 'ngaysinh'], 'safe'],
            [['name', 'hoten', 'chucvu', 'CTNA_GDLT', 'CTNA_HDTH', 'CTNA_HDTN', 'CTNA_CT', 'CTNA_KN', 'CTNB_NCKH', 'CTNB_VGT', 'CTNB_VCDKH', 'CTNB_CMNV', 'CTK_TGPT', 'CTK_CHPL'], 'string', 'max' => 100],
            [['khoa_id'], 'exist', 'skipOnError' => true, 'targetClass' => Khoa::className(), 'targetAttribute' => ['khoa_id' => 'id']],
            [['namhoc_id'], 'exist', 'skipOnError' => true, 'targetClass' => Namhoc::className(), 'targetAttribute' => ['namhoc_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Tên'),
            'khoa_id' => Yii::t('app', 'Khoa'),
            'namhoc_id' => Yii::t('app', 'Năm học'),
            'ngaydk' => Yii::t('app', 'Ngày đăng ký'),
            'created_at' => Yii::t('app', 'Ngày tạo'),
            'updated_at' => Yii::t('app', 'Ngày sửa'),
            'hoten' => Yii::t('app', 'Họ tên'),
            'ngaysinh' => Yii::t('app', 'Ngày sinh'),
            'chucvu' => Yii::t('app', 'Chức vụ'),
            'CTNA_GDLT' => Yii::t('app', 'Giảng dạy lý thuyết: Hệ chính quy ĐH, CĐ'),
            'CTNA_HDTH' => Yii::t('app', 'Hướng dẫn thực hành, thí nghiệm'),
            'CTNA_HDTN' => Yii::t('app', 'Hướng dẫn tốt nghiệp'),
            'CTNA_CT' => Yii::t('app', 'Chấm thi, hỏi thi'),
            'CTNA_KN' => Yii::t('app', 'Công tác kiêm nhiệm'),
            'CTNB_NCKH' => Yii::t('app', 'Nghiên cứu khoa học'),
            'CTNB_VGT' => Yii::t('app', 'Viết giáo trình, bài giảng'),
            'CTNB_VCDKH' => Yii::t('app', 'Viết chuyên đề Khoa học'),
            'CTNB_CMNV' => Yii::t('app', 'Học tập chuyên môn, nghiệp vụ'),
            'CTK_TGPT' => Yii::t('app', 'Tham gia các phong trào, các hoạt động của Nhà trường'),
            'CTK_CHPL' => Yii::t('app', 'Chấp hành tốt pháp luật của Nhà nước, các quy định của ngành, Trường'),
        ];
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
    public function getNamhoc()
    {
        return $this->hasOne(Namhoc::className(), ['id' => 'namhoc_id']);
    }

    public function beforeSave($insert)
    {
        if($insert)
            $this->created_at = new Expression("NOW()");
        else
            $this->updated_at = new Expression("NOW()");
//        $this->HDGD_TKB_BPCGD__id = 1;
        $this->ngaydk = myFuncs::dayMonthYeartoYearMonthDay($this->ngaydk);
        $this->ngaysinh = myFuncs::dayMonthYeartoYearMonthDay($this->ngaysinh);
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }
}
