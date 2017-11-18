<?php

namespace common\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Authitem;

/**
 * AuthitemSearch represents the model behind the search form of `common\models\Authitem`.
 */
class AuthitemSearch extends Authitem
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'roles_id', 'auth_id', 'khoa_id'], 'integer'],
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
        $query = Authitem::find();

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
            'roles_id' => $this->roles_id,
            'auth_id' => $this->auth_id,
            'khoa_id' => $this->khoa_id,
        ]);

        return $dataProvider;
    }
}
