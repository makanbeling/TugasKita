<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NilaiUpp;

/**
 * NilaiUppSearch represents the model behind the search form of `app\models\NilaiUpp`.
 */
class NilaiUppSearch extends NilaiUpp
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_nilai', 'id_level', 'id_daerah', 'id_upp', 'ipp', 'p_1_a_K1', 'p_1_a_K2', 'p_1_a_k3', 'p_1_a_P', 'p_1_a_T', 'p_1_a_Ak', 'p_1_a_As', 'p_1_a_B', 'p_1_b_T', 'p_1_c_P', 'p_1_c_T', 'p_1_c_Ak', 'p_1_c_B', 'p_2_a_Ak', 'p_2_b_Ak_1', 'p_2_b_Ak_2', 'p_2_d_K', 'p_2_e_K1', 'p_2_e_K2', 'p_2_g_Ak', 'p_3_a_As', 'p_3_b_K1', 'p_3_b_As', 'p_3_c_K', 'p_3_d_As1', 'p_3_e_As2', 'p_3_e_As4', 'p_4_a_T', 'p_4_a_B', 'p_4_a_Ak1', 'p_4_a_Ak2', 'p_4_b_T', 'p_5_a_K', 'p_5_a_As', 'p_5_b_K', 'p_5_b_As', 'p_6_'], 'integer'],
            [['provinsi', 'nama_daerah'], 'safe'],
            [['r_1_a_K1', 'r_1_a_K2', 'r_1_a_k3', 'r_1_a_P', 'r_1_a_T', 'r_1_a_Ak', 'r_1_a_As', 'r_1_a_B', 'r_1_b_T', 'r_1_c_P', 'r_1_c_T', 'r_1_c_Ak', 'r_1_c_B', 'r_2_a_Ak', 'r_2_b_Ak_1', 'r_2_b_Ak_2', 'r_2_d_K', 'r_2_e_K1', 'r_2_e_K2', 'r_2_g_Ak', 'r_3_a_As', 'r_3_b_K1', 'r_3_b_As', 'r_3_c_K', 'r_3_d_As1', 'r_3_e_As2', 'r_3_e_As4', 'r_4_a_T', 'r_4_a_B', 'r_4_a_Ak1', 'r_4_a_Ak2', 'r_4_b_T', 'r_5_a_K', 'r_5_a_As', 'r_5_b_K', 'r_5_b_As', 'r_6_'], 'number'],
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
        $query = NilaiUpp::find();

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
            'id_nilai' => $this->id_nilai,
            'id_level' => $this->id_level,
            'id_daerah' => $this->id_daerah,
            'id_upp' => $this->id_upp,
            'ipp' => $this->ipp,
            'p_1_a_K1' => $this->p_1_a_K1,
            'p_1_a_K2' => $this->p_1_a_K2,
            'p_1_a_k3' => $this->p_1_a_k3,
            'p_1_a_P' => $this->p_1_a_P,
            'p_1_a_T' => $this->p_1_a_T,
            'p_1_a_Ak' => $this->p_1_a_Ak,
            'p_1_a_As' => $this->p_1_a_As,
            'p_1_a_B' => $this->p_1_a_B,
            'p_1_b_T' => $this->p_1_b_T,
            'p_1_c_P' => $this->p_1_c_P,
            'p_1_c_T' => $this->p_1_c_T,
            'p_1_c_Ak' => $this->p_1_c_Ak,
            'p_1_c_B' => $this->p_1_c_B,
            'p_2_a_Ak' => $this->p_2_a_Ak,
            'p_2_b_Ak_1' => $this->p_2_b_Ak_1,
            'p_2_b_Ak_2' => $this->p_2_b_Ak_2,
            'p_2_d_K' => $this->p_2_d_K,
            'p_2_e_K1' => $this->p_2_e_K1,
            'p_2_e_K2' => $this->p_2_e_K2,
            'p_2_g_Ak' => $this->p_2_g_Ak,
            'p_3_a_As' => $this->p_3_a_As,
            'p_3_b_K1' => $this->p_3_b_K1,
            'p_3_b_As' => $this->p_3_b_As,
            'p_3_c_K' => $this->p_3_c_K,
            'p_3_d_As1' => $this->p_3_d_As1,
            'p_3_e_As2' => $this->p_3_e_As2,
            'p_3_e_As4' => $this->p_3_e_As4,
            'p_4_a_T' => $this->p_4_a_T,
            'p_4_a_B' => $this->p_4_a_B,
            'p_4_a_Ak1' => $this->p_4_a_Ak1,
            'p_4_a_Ak2' => $this->p_4_a_Ak2,
            'p_4_b_T' => $this->p_4_b_T,
            'p_5_a_K' => $this->p_5_a_K,
            'p_5_a_As' => $this->p_5_a_As,
            'p_5_b_K' => $this->p_5_b_K,
            'p_5_b_As' => $this->p_5_b_As,
            'p_6_' => $this->p_6_,
            'r_1_a_K1' => $this->r_1_a_K1,
            'r_1_a_K2' => $this->r_1_a_K2,
            'r_1_a_k3' => $this->r_1_a_k3,
            'r_1_a_P' => $this->r_1_a_P,
            'r_1_a_T' => $this->r_1_a_T,
            'r_1_a_Ak' => $this->r_1_a_Ak,
            'r_1_a_As' => $this->r_1_a_As,
            'r_1_a_B' => $this->r_1_a_B,
            'r_1_b_T' => $this->r_1_b_T,
            'r_1_c_P' => $this->r_1_c_P,
            'r_1_c_T' => $this->r_1_c_T,
            'r_1_c_Ak' => $this->r_1_c_Ak,
            'r_1_c_B' => $this->r_1_c_B,
            'r_2_a_Ak' => $this->r_2_a_Ak,
            'r_2_b_Ak_1' => $this->r_2_b_Ak_1,
            'r_2_b_Ak_2' => $this->r_2_b_Ak_2,
            'r_2_d_K' => $this->r_2_d_K,
            'r_2_e_K1' => $this->r_2_e_K1,
            'r_2_e_K2' => $this->r_2_e_K2,
            'r_2_g_Ak' => $this->r_2_g_Ak,
            'r_3_a_As' => $this->r_3_a_As,
            'r_3_b_K1' => $this->r_3_b_K1,
            'r_3_b_As' => $this->r_3_b_As,
            'r_3_c_K' => $this->r_3_c_K,
            'r_3_d_As1' => $this->r_3_d_As1,
            'r_3_e_As2' => $this->r_3_e_As2,
            'r_3_e_As4' => $this->r_3_e_As4,
            'r_4_a_T' => $this->r_4_a_T,
            'r_4_a_B' => $this->r_4_a_B,
            'r_4_a_Ak1' => $this->r_4_a_Ak1,
            'r_4_a_Ak2' => $this->r_4_a_Ak2,
            'r_4_b_T' => $this->r_4_b_T,
            'r_5_a_K' => $this->r_5_a_K,
            'r_5_a_As' => $this->r_5_a_As,
            'r_5_b_K' => $this->r_5_b_K,
            'r_5_b_As' => $this->r_5_b_As,
            'r_6_' => $this->r_6_,
        ]);

        $query->andFilterWhere(['like', 'provinsi', $this->provinsi])
            ->andFilterWhere(['like', 'nama_daerah', $this->nama_daerah]);

        return $dataProvider;
    }
}
