<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nilai_keterangan".
 *
 * @property int $id
 * @property string $prinsip
 * @property int $f02
 * @property double $rata
 * @property double $indeks
 */
class NilaiKeterangan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nilai_keterangan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['f02'], 'integer'],
            [['rata', 'indeks'], 'number'],
            [['prinsip'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'prinsip' => 'Prinsip',
            'f02' => 'F02',
            'rata' => 'Rata',
            'indeks' => 'Indeks',
        ];
    }

    /**
     * {@inheritdoc}
     * @return NilaiKeteranganQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NilaiKeteranganQuery(get_called_class());
    }
}
