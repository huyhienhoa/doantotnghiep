<?php

namespace common\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Dkthiduacanhan;

/**
 * DkthiduacanhanSearch represents the model behind the search form of `common\models\Dkthiduacanhan`.
 */
class DkthiduacanhanSearch extends Dkthiduacanhan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'khoa_id', 'namhoc_id'], 'integer'],
            [['name', 'ngaydk', 'created_at', 'updated_at', 'hoten', 'ngaysinh', 'CTNA_GDLT', 'CTNA_HDTH', 'CTNA_HDTN', 'CTNA_CT', 'CTNA_KN', 'CTNB_NCKH', 'CTNB_VGT', 'CTNB_VCDKH', 'CTNB_CMNV', 'CTK_TGPT', 'CTK_CHPL'], 'safe'],
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
        $query = Dkthiduacanhan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
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
            'khoa_id' => $this->khoa_id,
            'namhoc_id' => $this->namhoc_id,
            'ngaydk' => $this->ngaydk,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'ngaysinh' => $this->ngaysinh,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'hoten', $this->hoten])
            ->andFilterWhere(['like', 'CTNA_GDLT', $this->CTNA_GDLT])
            ->andFilterWhere(['like', 'CTNA_HDTH', $this->CTNA_HDTH])
            ->andFilterWhere(['like', 'CTNA_HDTN', $this->CTNA_HDTN])
            ->andFilterWhere(['like', 'CTNA_CT', $this->CTNA_CT])
            ->andFilterWhere(['like', 'CTNA_KN', $this->CTNA_KN])
            ->andFilterWhere(['like', 'CTNB_NCKH', $this->CTNB_NCKH])
            ->andFilterWhere(['like', 'CTNB_VGT', $this->CTNB_VGT])
            ->andFilterWhere(['like', 'CTNB_VCDKH', $this->CTNB_VCDKH])
            ->andFilterWhere(['like', 'CTNB_CMNV', $this->CTNB_CMNV])
            ->andFilterWhere(['like', 'CTK_TGPT', $this->CTK_TGPT])
            ->andFilterWhere(['like', 'CTK_CHPL', $this->CTK_CHPL]);

        return $dataProvider;
    }
}
