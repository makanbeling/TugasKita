<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MasterDaerah;

/**
 * MasterDaerahSearch represents the model behind the search form of `app\models\MasterDaerah`.
 */
class MasterDaerahSearch extends MasterDaerah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_daerah'], 'integer'],
            [['jenis_daerah', 'nama_daerah'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = MasterDaerah::find();

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
            'id_daerah' => $this->id_daerah,
        ]);

        $query->andFilterWhere(['like', 'jenis_daerah', $this->jenis_daerah])
            ->andFilterWhere(['like', 'nama_daerah', $this->nama_daerah]);

        return $dataProvider;
    }
}
