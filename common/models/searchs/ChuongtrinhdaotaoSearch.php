<?php

namespace common\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Chuongtrinhdaotao;

/**
 * ChuongtrinhdaotaoSearch represents the model behind the search form of `common\models\Chuongtrinhdaotao`.
 */
class ChuongtrinhdaotaoSearch extends Chuongtrinhdaotao
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'trinhdo_id', 'hinhthucdaotao_id', 'khoa_id', 'chuyennganh_id', 'CTDT_DCHP_id'], 'integer'],
            [['name', 'ngaybanhanh', 'cosodaotao', 'quyetdinhso', 'created_at', 'updated_at', 'filedinhkem'], 'safe'],
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
        $query = (is_null(Yii::$app->user->identity->khoa_id))?Chuongtrinhdaotao::find():Chuongtrinhdaotao::find()->where(['khoa_id'=>Yii::$app->user->identity->khoa_id]);

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
            'ngaybanhanh' => $this->ngaybanhanh,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'trinhdo_id' => $this->trinhdo_id,
            'hinhthucdaotao_id' => $this->hinhthucdaotao_id,
            'khoa_id' => $this->khoa_id,
            'chuyennganh_id' => $this->chuyennganh_id,
            'CTDT_DCHP_id' => $this->CTDT_DCHP_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'cosodaotao', $this->cosodaotao])
            ->andFilterWhere(['like', 'quyetdinhso', $this->quyetdinhso])
            ->andFilterWhere(['like', 'filedinhkem', $this->filedinhkem]);

        return $dataProvider;
    }
}
