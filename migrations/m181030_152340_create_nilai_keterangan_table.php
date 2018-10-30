<?php

use yii\db\Migration;

/**
 * Handles the creation of table `nilai_keterangan`.
 */
class m181030_152340_create_nilai_keterangan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('nilai_keterangan', [
            'id' => $this->primaryKey(),
            'prinsip'=>$this->string(),
            'f02'=>$this->integer(),
            'rata'=>$this->float(3),
            'indeks'=>$this->float(3),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('nilai_keterangan');
    }
}
