<?php

use yii\db\Migration;

/**
 * Handles the creation of table `nilai_upp`_
 */
class m181020_080127_create_nilai_upp_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('nilai_upp', [
            'id_nilai' => $this->primaryKey(),
            'id_level' => $this->integer(),
            'provinsi'=> $this->string(),
            'id_daerah' => $this->integer(),
            'nama_daerah'=>$this->string(),
            'id_upp' => $this->integer(),
            'ipp' => $this->float(3),
            'tahun'=> 'YEAR(4)',
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
            'r_1_a_K1'=>$this->float(3),
            'r_1_a_K2'=>$this->float(3),
            'r_1_a_k3'=>$this->float(3),
            'r_1_a_P'=>$this->float(3),
            'r_1_a_T'=>$this->float(3),
            'r_1_a_Ak'=>$this->float(3),
            'r_1_a_As'=>$this->float(3),
            'r_1_a_B'=>$this->float(3),
            'r_1_b_T'=>$this->float(3),
            'r_1_c_P'=>$this->float(3),
            'r_1_c_T'=>$this->float(3),
            'r_1_c_Ak'=>$this->float(3),
            'r_1_c_B'=>$this->float(3),
            'r_2_a_Ak'=>$this->float(3),
            'r_2_b_Ak_1'=>$this->float(3),
            'r_2_b_Ak_2'=>$this->float(3),
            'r_2_d_K'=>$this->float(3),
            'r_2_e_K1'=>$this->float(3),
            'r_2_e_K2'=>$this->float(3),
            'r_2_g_Ak'=>$this->float(3),
            'r_3_a_As'=>$this->float(3),
            'r_3_b_K1'=>$this->float(3),
            'r_3_b_As'=>$this->float(3),
            'r_3_c_K'=>$this->float(3),
            'r_3_d_As1'=>$this->float(3),
            'r_3_e_As2'=>$this->float(3),
            'r_3_e_As4'=>$this->float(3),
            'r_4_a_T'=>$this->float(3),
            'r_4_a_B'=>$this->float(3),
            'r_4_a_Ak1'=>$this->float(3),
            'r_4_a_Ak2'=>$this->float(3),
            'r_4_b_T'=>$this->float(3),
            'r_5_a_K'=>$this->float(3),
            'r_5_a_As'=>$this->float(3),
            'r_5_b_K'=>$this->float(3),
            'r_5_b_As'=>$this->float(3),
            'r_6_'=>$this->float(3),
        ]);
        $this->addForeignKey('fk-master-level-id-level','nilai_upp','id_level','master_level','id_level');
        $this->addForeignKey('fk-master-daerah-id-daerah','nilai_upp','id_daerah','master_daerah','id_daerah');
        $this->addForeignKey('fk-master-upp-id-upp','nilai_upp','id_upp','master_upp','id_upp');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('nilai_upp');
    }
}
