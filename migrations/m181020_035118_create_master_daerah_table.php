<?php

use yii\db\Migration;

/**
 * Handles the creation of table `master_daerah`.
 */
class m181020_035118_create_master_daerah_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('master_daerah', [
            'id_daerah' => $this->primaryKey(),
            'jenis_daerah'=> "ENUM('provinsi', 'kota', 'kabupaten')",
            'nama_daerah'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('master_daerah');
    }
}
