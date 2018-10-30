<?php

use yii\db\Migration;

/**
 * Handles the creation of table `nilai_baru`.
 */
class m181030_174844_create_nilai_baru_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('nilai_baru', [
            'id' => $this->primaryKey(),
            'prov'=>$this->string(),
            'prov_kab_kot'=>$this->string(),
            'kode'=>$this->string(),
            'unit_layanan'=>$this->string(),
            'tahun'=>"YEAR",
            'p_1_a_K1' => $this->integer(),
            'p_1_a_K2' => $this->integer(),
            'p_1_a_k3' => $this->integer(),
            'p_1_a_P' => $this->integer(),
            'p_1_a_T' => $this->integer(),
            'p_1_a_Ak' => $this->integer(),
            'p_1_a_As' => $this->integer(),
            'p_1_a_B' => $this->integer(),
            'p_1_b_T' => $this->integer(),
            'p_1_c_P' => $this->integer(),
            'p_1_c_T' => $this->integer(),
            'p_1_c_Ak' => $this->integer(),
            'p_1_c_B' => $this->integer(),
            'p_2_a_Ak' => $this->integer(),
            'p_2_b_Ak_1' => $this->integer(),
            'p_2_b_Ak_2' => $this->integer(),
            'p_2_d_K' => $this->integer(),
            'p_2_e_K1' => $this->integer(),
            'p_2_e_K2' => $this->integer(),
            'p_2_g_Ak' => $this->integer(),
            'p_3_a_As' => $this->integer(),
            'p_3_b_K1' => $this->integer(),
            'p_3_b_As' => $this->integer(),
            'p_3_c_K' => $this->integer(),
            'p_3_d_As1' => $this->integer(),
            'p_3_e_As2' => $this->integer(),
            'p_3_e_As4' => $this->integer(),
            'p_4_a_T' => $this->integer(),
            'p_4_a_B' => $this->integer(),
            'p_4_a_Ak1' => $this->integer(),
            'p_4_a_Ak2' => $this->integer(),
            'p_4_b_T' => $this->integer(),
            'p_5_a_K' => $this->integer(),
            'p_5_a_As' => $this->integer(),
            'p_5_b_K' => $this->integer(),
            'p_5_b_As' => $this->integer(),
            'p_6_' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('nilai_baru');
    }
}
