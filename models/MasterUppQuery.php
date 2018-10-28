<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[MasterUpp]].
 *
 * @see MasterUpp
 */
class MasterUppQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return MasterUpp[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return MasterUpp|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
