<?php

namespace common\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Ketquadanhgiahocphan;

/**
 * KetquadanhgiahocphanSearch represents the model behind the search form of `common\models\Ketquadanhgiahocphan`.
 */
class KetquadanhgiahocphanSearch extends Ketquadanhgiahocphan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'hocky_id', 'namhoc_id', 'monhoc_id', 'loaitailieu_id'], 'integer'],
            [['name', 'created_at', 'updated_at', 'ngaythi', 'canbocoithi', 'canbochamthi', 'nhomhocphan', 'filedinhkem'], 'safe'],
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
        $query = Ketquadanhgiahocphan::find();

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
            'ngaythi' => $this->ngaythi,
            'hocky_id' => $this->hocky_id,
            'namhoc_id' => $this->namhoc_id,
            'monhoc_id' => $this->monhoc_id,
            'loaitailieu_id' => $this->loaitailieu_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'canbocoithi', $this->canbocoithi])
            ->andFilterWhere(['like', 'canbochamthi', $this->canbochamthi])
            ->andFilterWhere(['like', 'nhomhocphan', $this->nhomhocphan])
            ->andFilterWhere(['like', 'filedinhkem', $this->filedinhkem]);

        return $dataProvider;
    }
}
