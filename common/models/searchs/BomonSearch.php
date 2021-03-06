<?php

namespace common\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Bomon;

/**
 * BomonSearch represents the model behind the search form of `common\models\Bomon`.
 */
class BomonSearch extends Bomon
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'khoa_id'], 'integer'],
            [['tenbomon', 'mabomon'], 'safe'],
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

        $query = (is_null(Yii::$app->user->identity->khoa_id))?Bomon::find():Bomon::find()->where(['khoa_id'=>Yii::$app->user->identity->khoa_id]);

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
            'khoa_id' => $this->khoa_id,
        ]);

        $query->andFilterWhere(['like', 'tenbomon', $this->tenbomon])
            ->andFilterWhere(['like', 'mabomon', $this->mabomon]);

        return $dataProvider;
    }
}
