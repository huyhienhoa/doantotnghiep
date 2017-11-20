<?php

namespace common\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Dkthiduatapthe;

/**
 * DkthiduataptheSearch represents the model behind the search form of `common\models\Dkthiduatapthe`.
 */
class DkthiduataptheSearch extends Dkthiduatapthe
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'namhoc_id', 'khoa_id', 'sogiangvien', 'sogiangviencomat'], 'integer'],
            [['name', 'ngaydk', 'created_at', 'updated_at', 'CTNA_GDLT', 'CTNA_HDTH', 'CTNA_HDTN', 'CTNA_CT', 'CTNA_KN', 'CTNB_VGT', 'CTNB_NCKH', 'CTNB_CMNV', 'CTNB_TGPT', 'CTNB_CHPL'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Dkthiduatapthe::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'namhoc_id' => $this->namhoc_id,
            'khoa_id' => $this->khoa_id,
            'ngaydk' => $this->ngaydk,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'sogiangvien' => $this->sogiangvien,
            'sogiangviencomat' => $this->sogiangviencomat,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'CTNA_GDLT', $this->CTNA_GDLT])
            ->andFilterWhere(['like', 'CTNA_HDTH', $this->CTNA_HDTH])
            ->andFilterWhere(['like', 'CTNA_HDTN', $this->CTNA_HDTN])
            ->andFilterWhere(['like', 'CTNA_CT', $this->CTNA_CT])
            ->andFilterWhere(['like', 'CTNA_KN', $this->CTNA_KN])
            ->andFilterWhere(['like', 'CTNB_VGT', $this->CTNB_VGT])
            ->andFilterWhere(['like', 'CTNB_NCKH', $this->CTNB_NCKH])
            ->andFilterWhere(['like', 'CTNB_CMNV', $this->CTNB_CMNV])
            ->andFilterWhere(['like', 'CTNB_TGPT', $this->CTNB_TGPT])
            ->andFilterWhere(['like', 'CTNB_CHPL', $this->CTNB_CHPL]);

        return $dataProvider;
    }
}
