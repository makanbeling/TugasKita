<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nilai_baru".
 *
 * @property int $id
 * @property string $prov
 * @property string $prov_kab_kot
 * @property string $kode
 * @property string $unit_layanan
 * @property string $tahun
 * @property string $jenis_wilayah
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
 */
class NilaiBaru extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nilai_baru';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tahun'], 'safe'],
            [['jenis_wilayah'], 'string'],
            [['p_1_a_K1', 'p_1_a_K2', 'p_1_a_k3', 'p_1_a_P', 'p_1_a_T', 'p_1_a_Ak', 'p_1_a_As', 'p_1_a_B', 'p_1_b_T', 'p_1_c_P', 'p_1_c_T', 'p_1_c_Ak', 'p_1_c_B', 'p_2_a_Ak', 'p_2_b_Ak_1', 'p_2_b_Ak_2', 'p_2_d_K', 'p_2_e_K1', 'p_2_e_K2', 'p_2_g_Ak', 'p_3_a_As', 'p_3_b_K1', 'p_3_b_As', 'p_3_c_K', 'p_3_d_As1', 'p_3_e_As2', 'p_3_e_As4', 'p_4_a_T', 'p_4_a_B', 'p_4_a_Ak1', 'p_4_a_Ak2', 'p_4_b_T', 'p_5_a_K', 'p_5_a_As', 'p_5_b_K', 'p_5_b_As', 'p_6_'], 'integer'],
            [['prov', 'prov_kab_kot', 'kode', 'unit_layanan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'prov' => 'Prov',
            'prov_kab_kot' => 'Prov Kab Kot',
            'kode' => 'Kode',
            'unit_layanan' => 'Unit Layanan',
            'tahun' => 'Tahun',
            'jenis_wilayah' => 'Jenis Wilayah',
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
        ];
    }

    /**
     * {@inheritdoc}
     * @return NilaiBaruQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NilaiBaruQuery(get_called_class());
    }
}
