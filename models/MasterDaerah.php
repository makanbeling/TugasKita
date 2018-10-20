<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "master_daerah".
 *
 * @property int $id_daerah
 * @property string $jenis_daerah
 * @property string $nama_daerah
 */
class MasterDaerah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_daerah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_daerah'], 'string'],
            [['nama_daerah'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_daerah' => 'Id Daerah',
            'jenis_daerah' => 'Jenis Daerah',
            'nama_daerah' => 'Nama Daerah',
        ];
    }

    /**
     * {@inheritdoc}
     * @return MasterDaerahQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MasterDaerahQuery(get_called_class());
    }
}
