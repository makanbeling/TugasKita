<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "master_level".
 *
 * @property int $id_level
 * @property string $jenis_level
 * @property string $keterangan
 */
class MasterLevel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_level';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_level'], 'string'],
            [['keterangan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_level' => 'Id Level',
            'jenis_level' => 'Jenis Level',
            'keterangan' => 'Keterangan',
        ];
    }
}
