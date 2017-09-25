<?php

namespace common\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Giangvien;

/**
 * GiangvienSearch represents the model behind the search form of `common\models\Giangvien`.
 */
class GiangvienSearch extends Giangvien
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'bomon_id'], 'integer'],
            [['magiangvien', 'tengiangvien'], 'safe'],
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
        $query = Giangvien::find();

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
            'bomon_id' => $this->bomon_id,
        ]);

        $query->andFilterWhere(['like', 'magiangvien', $this->magiangvien])
            ->andFilterWhere(['like', 'tengiangvien', $this->tengiangvien]);

        return $dataProvider;
    }
}
