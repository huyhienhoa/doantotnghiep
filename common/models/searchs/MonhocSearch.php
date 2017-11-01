<?php

namespace common\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Monhoc;

/**
 * MonhocSearch represents the model behind the search form of `common\models\Monhoc`.
 */
class MonhocSearch extends Monhoc
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'sotinchi', 'bomon_id'], 'integer'],
            [['tenmonhoc', 'mamonhoc', 'thuchanh', 'baitaplon'], 'safe'],
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
        $query = Monhoc::find();

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
            'sotinchi' => $this->sotinchi,
            'bomon_id' => $this->bomon_id,
        ]);

        $query->andFilterWhere(['like', 'tenmonhoc', $this->tenmonhoc])
            ->andFilterWhere(['like', 'mamonhoc', $this->mamonhoc])
            ->andFilterWhere(['like', 'thuchanh', $this->thuchanh])
            ->andFilterWhere(['like', 'baitaplon', $this->baitaplon]);

        return $dataProvider;
    }
}
