<?php

use yii\db\Migration;

/**
 * Handles the creation for table `info_table`.
 */
class m171009_042447_create_info_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('info_table', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'image_display' => $this->string(),
            'description' => $this->string(),
            'content' => $this->text(),
            'phone' => $this->string(),
            'address' => $this->string(),
            'facebook' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('info_table');
    }
}
