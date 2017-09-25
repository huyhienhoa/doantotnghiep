<?php

namespace common\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\QuydinhQuychedaotao;

/**
 * QuydinhQuychedaotaoSearch represents the model behind the search form of `common\models\QuydinhQuychedaotao`.
 */
class QuydinhQuychedaotaoSearch extends QuydinhQuychedaotao
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'namhoc_id', 'loaitailieu_id'], 'integer'],
            [['name', 'ngaybanhanh', 'soquyetdinh', 'created_at', 'updated_at', 'filedinhkem'], 'safe'],
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
        $query = QuydinhQuychedaotao::find();

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
            'ngaybanhanh' => $this->ngaybanhanh,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'namhoc_id' => $this->namhoc_id,
            'loaitailieu_id' => $this->loaitailieu_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'soquyetdinh', $this->soquyetdinh])
            ->andFilterWhere(['like', 'filedinhkem', $this->filedinhkem]);

        return $dataProvider;
    }
}
