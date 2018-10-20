<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[NilaiUpp]].
 *
 * @see NilaiUpp
 */
class NilaiUppQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return NilaiUpp[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return NilaiUpp|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
