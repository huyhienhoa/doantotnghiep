<?php

namespace common\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Lichthi;

/**
 * LichthiSearch represents the model behind the search form of `common\models\Lichthi`.
 */
class LichthiSearch extends Lichthi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'hinhthucdaotao_id', 'hocky_id', 'namhoc_id', 'DBTL_DCOT_LT_PCCT_id'], 'integer'],
            [['name', 'created_at', 'updated_at', 'filedinhkem'], 'safe'],
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
        $query = Lichthi::find();

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
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'hinhthucdaotao_id' => $this->hinhthucdaotao_id,
            'hocky_id' => $this->hocky_id,
            'namhoc_id' => $this->namhoc_id,
            'DBTL_DCOT_LT_PCCT_id' => $this->DBTL_DCOT_LT_PCCT_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'filedinhkem', $this->filedinhkem]);

        return $dataProvider;
    }
}
