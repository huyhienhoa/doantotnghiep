<?php

namespace common\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Nganhangdethi;

/**
 * NganhangdethiSearch represents the model behind the search form of `common\models\Nganhangdethi`.
 */
class NganhangdethiSearch extends Nganhangdethi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'namhoc_id', 'hocky_id', 'trinhdo_id', 'hinhthucdaotao_id', 'monhoc_id', 'NHDT_DA_id'], 'integer'],
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
        $query = Nganhangdethi::find();

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
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'namhoc_id' => $this->namhoc_id,
            'hocky_id' => $this->hocky_id,
            'trinhdo_id' => $this->trinhdo_id,
            'hinhthucdaotao_id' => $this->hinhthucdaotao_id,
            'monhoc_id' => $this->monhoc_id,
            'NHDT_DA_id' => $this->NHDT_DA_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'filedinhkem', $this->filedinhkem]);

        return $dataProvider;
    }
}
