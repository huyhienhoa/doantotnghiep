<?php

namespace common\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ThongbaoQuyetdinh;

/**
 * ThongbaoQuyetdinhSearch represents the model behind the search form of `common\models\ThongbaoQuyetdinh`.
 */
class ThongbaoQuyetdinhSearch extends ThongbaoQuyetdinh
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'hinhthucdaotao_id', 'trinhdo_id', 'loaitailieu_id'], 'integer'],
            [['name', 'ngaycohieuluc', 'created_at', 'updated_at', 'filedinhkem'], 'safe'],
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
        $query = ThongbaoQuyetdinh::find();

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
            'ngaycohieuluc' => $this->ngaycohieuluc,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'hinhthucdaotao_id' => $this->hinhthucdaotao_id,
            'trinhdo_id' => $this->trinhdo_id,
            'loaitailieu_id' => $this->loaitailieu_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'filedinhkem', $this->filedinhkem]);

        return $dataProvider;
    }
}
