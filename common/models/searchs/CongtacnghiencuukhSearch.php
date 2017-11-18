<?php

namespace common\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Congtacnghiencuukh;

/**
 * CongtacnghiencuukhSearch represents the model behind the search form of `common\models\Congtacnghiencuukh`.
 */
class CongtacnghiencuukhSearch extends Congtacnghiencuukh
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'loaitailieu_id', 'giangvien_id', 'namhoc_id', 'khoa_id'], 'integer'],
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
        $query = (is_null(Yii::$app->user->identity->khoa_id))?Congtacnghiencuukh::find():Congtacnghiencuukh::find()->where(['khoa_id'=>Yii::$app->user->identity->khoa_id]);

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
            'loaitailieu_id' => $this->loaitailieu_id,
            'giangvien_id' => $this->giangvien_id,
            'namhoc_id' => $this->namhoc_id,
            'khoa_id' => $this->khoa_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'filedinhkem', $this->filedinhkem]);

        return $dataProvider;
    }
}
