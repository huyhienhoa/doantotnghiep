<?php

namespace common\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Debaitaplon;

/**
 * DebaitaplonSearch represents the model behind the search form of `common\models\Debaitaplon`.
 */
class DebaitaplonSearch extends Debaitaplon
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'hocky_id', 'namhoc_id', 'monhoc_id', 'DBTL_DCOT_LT_PCCT_id'], 'integer'],
            [['name', 'nhomhocphan', 'created_at', 'updated_at', 'filedinhkem'], 'safe'],
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
        $query = Debaitaplon::find();

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
            'hocky_id' => $this->hocky_id,
            'namhoc_id' => $this->namhoc_id,
            'monhoc_id' => $this->monhoc_id,
            'DBTL_DCOT_LT_PCCT_id' => $this->DBTL_DCOT_LT_PCCT_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'nhomhocphan', $this->nhomhocphan])
            ->andFilterWhere(['like', 'filedinhkem', $this->filedinhkem]);

        return $dataProvider;
    }
}
