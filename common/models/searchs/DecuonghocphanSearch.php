<?php

namespace common\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Decuonghocphan;

/**
 * DecuonghocphanSearch represents the model behind the search form of `common\models\Decuonghocphan`.
 */
class DecuonghocphanSearch extends Decuonghocphan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'monhoc_id', 'CTDT_DCHP_id'], 'integer'],
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
        $query = Decuonghocphan::find();

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
            'monhoc_id' => $this->monhoc_id,
            'CTDT_DCHP_id' => $this->CTDT_DCHP_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'filedinhkem', $this->filedinhkem]);

        return $dataProvider;
    }
}
