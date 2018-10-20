<?php

use yii\db\Migration;

/**
 * Handles the creation of table `master_upp`.
 */
class m181020_075234_create_master_upp_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('master_upp', [
            'id_upp' => $this->primaryKey(),
            'jenis_upp'=>"ENUM('PTSP','Bappeda','SKCK','SIM','Disdukcapil','RSUD')",
            'keterangan'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('master_upp');
    }
}
