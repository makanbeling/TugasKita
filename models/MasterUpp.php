<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "master_upp".
 *
 * @property int $id_upp
 * @property string $jenis_upp
 * @property string $keterangan
 */
class MasterUpp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_upp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_upp'], 'string'],
            [['keterangan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_upp' => 'Id Upp',
            'jenis_upp' => 'Jenis Upp',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * {@inheritdoc}
     * @return MasterUppQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MasterUppQuery(get_called_class());
    }
}
