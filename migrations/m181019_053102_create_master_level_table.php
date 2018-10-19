<?php

use yii\db\Migration;

/**
 * Handles the creation of table `master_level`.
 */
class m181019_053102_create_master_level_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('master_level', [
            'id_level' => $this->primaryKey(),
            'jenis_level'=> "ENUM('I','II','III')",
            'keterangan'=> $this->string(255)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('master_level');
    }
}
