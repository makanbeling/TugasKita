<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[NilaiKeterangan]].
 *
 * @see NilaiKeterangan
 */
class NilaiKeteranganQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return NilaiKeterangan[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return NilaiKeterangan|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
