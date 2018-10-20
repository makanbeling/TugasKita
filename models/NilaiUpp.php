<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nilai_upp".
 *
 * @property int $id_nilai
 * @property int $id_level
 * @property string $provinsi
 * @property int $id_daerah
 * @property string $nama_daerah
 * @property int $id_upp
 * @property int $ipp
 * @property int $p_1_a_K1
 * @property int $p_1_a_K2
 * @property int $p_1_a_k3
 * @property int $p_1_a_P
 * @property int $p_1_a_T
 * @property int $p_1_a_Ak
 * @property int $p_1_a_As
 * @property int $p_1_a_B
 * @property int $p_1_b_T
 * @property int $p_1_c_P
 * @property int $p_1_c_T
 * @property int $p_1_c_Ak
 * @property int $p_1_c_B
 * @property int $p_2_a_Ak
 * @property int $p_2_b_Ak_1
 * @property int $p_2_b_Ak_2
 * @property int $p_2_d_K
 * @property int $p_2_e_K1
 * @property int $p_2_e_K2
 * @property int $p_2_g_Ak
 * @property int $p_3_a_As
 * @property int $p_3_b_K1
 * @property int $p_3_b_As
 * @property int $p_3_c_K
 * @property int $p_3_d_As1
 * @property int $p_3_e_As2
 * @property int $p_3_e_As4
 * @property int $p_4_a_T
 * @property int $p_4_a_B
 * @property int $p_4_a_Ak1
 * @property int $p_4_a_Ak2
 * @property int $p_4_b_T
 * @property int $p_5_a_K
 * @property int $p_5_a_As
 * @property int $p_5_b_K
 * @property int $p_5_b_As
 * @property int $p_6_
 * @property double $r_1_a_K1
 * @property double $r_1_a_K2
 * @property double $r_1_a_k3
 * @property double $r_1_a_P
 * @property double $r_1_a_T
 * @property double $r_1_a_Ak
 * @property double $r_1_a_As
 * @property double $r_1_a_B
 * @property double $r_1_b_T
 * @property double $r_1_c_P
 * @property double $r_1_c_T
 * @property double $r_1_c_Ak
 * @property double $r_1_c_B
 * @property double $r_2_a_Ak
 * @property double $r_2_b_Ak_1
 * @property double $r_2_b_Ak_2
 * @property double $r_2_d_K
 * @property double $r_2_e_K1
 * @property double $r_2_e_K2
 * @property double $r_2_g_Ak
 * @property double $r_3_a_As
 * @property double $r_3_b_K1
 * @property double $r_3_b_As
 * @property double $r_3_c_K
 * @property double $r_3_d_As1
 * @property double $r_3_e_As2
 * @property double $r_3_e_As4
 * @property double $r_4_a_T
 * @property double $r_4_a_B
 * @property double $r_4_a_Ak1
 * @property double $r_4_a_Ak2
 * @property double $r_4_b_T
 * @property double $r_5_a_K
 * @property double $r_5_a_As
 * @property double $r_5_b_K
 * @property double $r_5_b_As
 * @property double $r_6_
 */
class NilaiUpp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nilai_upp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_level', 'id_daerah', 'id_upp', 'ipp', 'p_1_a_K1', 'p_1_a_K2', 'p_1_a_k3', 'p_1_a_P', 'p_1_a_T', 'p_1_a_Ak', 'p_1_a_As', 'p_1_a_B', 'p_1_b_T', 'p_1_c_P', 'p_1_c_T', 'p_1_c_Ak', 'p_1_c_B', 'p_2_a_Ak', 'p_2_b_Ak_1', 'p_2_b_Ak_2', 'p_2_d_K', 'p_2_e_K1', 'p_2_e_K2', 'p_2_g_Ak', 'p_3_a_As', 'p_3_b_K1', 'p_3_b_As', 'p_3_c_K', 'p_3_d_As1', 'p_3_e_As2', 'p_3_e_As4', 'p_4_a_T', 'p_4_a_B', 'p_4_a_Ak1', 'p_4_a_Ak2', 'p_4_b_T', 'p_5_a_K', 'p_5_a_As', 'p_5_b_K', 'p_5_b_As', 'p_6_'], 'integer'],
            [['r_1_a_K1', 'r_1_a_K2', 'r_1_a_k3', 'r_1_a_P', 'r_1_a_T', 'r_1_a_Ak', 'r_1_a_As', 'r_1_a_B', 'r_1_b_T', 'r_1_c_P', 'r_1_c_T', 'r_1_c_Ak', 'r_1_c_B', 'r_2_a_Ak', 'r_2_b_Ak_1', 'r_2_b_Ak_2', 'r_2_d_K', 'r_2_e_K1', 'r_2_e_K2', 'r_2_g_Ak', 'r_3_a_As', 'r_3_b_K1', 'r_3_b_As', 'r_3_c_K', 'r_3_d_As1', 'r_3_e_As2', 'r_3_e_As4', 'r_4_a_T', 'r_4_a_B', 'r_4_a_Ak1', 'r_4_a_Ak2', 'r_4_b_T', 'r_5_a_K', 'r_5_a_As', 'r_5_b_K', 'r_5_b_As', 'r_6_'], 'number'],
            [['provinsi', 'nama_daerah'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_nilai' => 'Id Nilai',
            'id_level' => 'Id Level',
            'provinsi' => 'Provinsi',
            'id_daerah' => 'Id Daerah',
            'nama_daerah' => 'Nama Daerah',
            'id_upp' => 'Id Upp',
            'ipp' => 'Ipp',
            'p_1_a_K1' => 'P 1 A  K1',
            'p_1_a_K2' => 'P 1 A  K2',
            'p_1_a_k3' => 'P 1 A K3',
            'p_1_a_P' => 'P 1 A  P',
            'p_1_a_T' => 'P 1 A  T',
            'p_1_a_Ak' => 'P 1 A  Ak',
            'p_1_a_As' => 'P 1 A  As',
            'p_1_a_B' => 'P 1 A  B',
            'p_1_b_T' => 'P 1 B  T',
            'p_1_c_P' => 'P 1 C  P',
            'p_1_c_T' => 'P 1 C  T',
            'p_1_c_Ak' => 'P 1 C  Ak',
            'p_1_c_B' => 'P 1 C  B',
            'p_2_a_Ak' => 'P 2 A  Ak',
            'p_2_b_Ak_1' => 'P 2 B  Ak 1',
            'p_2_b_Ak_2' => 'P 2 B  Ak 2',
            'p_2_d_K' => 'P 2 D  K',
            'p_2_e_K1' => 'P 2 E  K1',
            'p_2_e_K2' => 'P 2 E  K2',
            'p_2_g_Ak' => 'P 2 G  Ak',
            'p_3_a_As' => 'P 3 A  As',
            'p_3_b_K1' => 'P 3 B  K1',
            'p_3_b_As' => 'P 3 B  As',
            'p_3_c_K' => 'P 3 C  K',
            'p_3_d_As1' => 'P 3 D  As1',
            'p_3_e_As2' => 'P 3 E  As2',
            'p_3_e_As4' => 'P 3 E  As4',
            'p_4_a_T' => 'P 4 A  T',
            'p_4_a_B' => 'P 4 A  B',
            'p_4_a_Ak1' => 'P 4 A  Ak1',
            'p_4_a_Ak2' => 'P 4 A  Ak2',
            'p_4_b_T' => 'P 4 B  T',
            'p_5_a_K' => 'P 5 A  K',
            'p_5_a_As' => 'P 5 A  As',
            'p_5_b_K' => 'P 5 B  K',
            'p_5_b_As' => 'P 5 B  As',
            'p_6_' => 'P 6',
            'r_1_a_K1' => 'R 1 A  K1',
            'r_1_a_K2' => 'R 1 A  K2',
            'r_1_a_k3' => 'R 1 A K3',
            'r_1_a_P' => 'R 1 A  P',
            'r_1_a_T' => 'R 1 A  T',
            'r_1_a_Ak' => 'R 1 A  Ak',
            'r_1_a_As' => 'R 1 A  As',
            'r_1_a_B' => 'R 1 A  B',
            'r_1_b_T' => 'R 1 B  T',
            'r_1_c_P' => 'R 1 C  P',
            'r_1_c_T' => 'R 1 C  T',
            'r_1_c_Ak' => 'R 1 C  Ak',
            'r_1_c_B' => 'R 1 C  B',
            'r_2_a_Ak' => 'R 2 A  Ak',
            'r_2_b_Ak_1' => 'R 2 B  Ak 1',
            'r_2_b_Ak_2' => 'R 2 B  Ak 2',
            'r_2_d_K' => 'R 2 D  K',
            'r_2_e_K1' => 'R 2 E  K1',
            'r_2_e_K2' => 'R 2 E  K2',
            'r_2_g_Ak' => 'R 2 G  Ak',
            'r_3_a_As' => 'R 3 A  As',
            'r_3_b_K1' => 'R 3 B  K1',
            'r_3_b_As' => 'R 3 B  As',
            'r_3_c_K' => 'R 3 C  K',
            'r_3_d_As1' => 'R 3 D  As1',
            'r_3_e_As2' => 'R 3 E  As2',
            'r_3_e_As4' => 'R 3 E  As4',
            'r_4_a_T' => 'R 4 A  T',
            'r_4_a_B' => 'R 4 A  B',
            'r_4_a_Ak1' => 'R 4 A  Ak1',
            'r_4_a_Ak2' => 'R 4 A  Ak2',
            'r_4_b_T' => 'R 4 B  T',
            'r_5_a_K' => 'R 5 A  K',
            'r_5_a_As' => 'R 5 A  As',
            'r_5_b_K' => 'R 5 B  K',
            'r_5_b_As' => 'R 5 B  As',
            'r_6_' => 'R 6',
        ];
    }

    /**
     * {@inheritdoc}
     * @return NilaiUppQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NilaiUppQuery(get_called_class());
    }
}
