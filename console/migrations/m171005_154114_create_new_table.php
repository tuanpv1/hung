<?php

use yii\db\Migration;

/**
 * Handles the creation of table `new`.
 */
class m171005_154114_create_new_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'image_display' => $this->text(),
            'image_slide' => $this->text(),
            'title' => $this->string(255),
            'status' => $this->integer(11),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'description' => $this->string(500),
            'content' => $this->text(),
            'is_slide' => $this->integer(2),
            'category_id' => $this->integer(11),
            'posted_id' => $this->integer(11)
        ]);

        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'display_name' => $this->string(255),
            'status' => $this->integer(11),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'description' => $this->string(500),
            'parent_id' => $this->integer(11)
        ]);
        $this->createTable('home_solution', [
            'id' => $this->primaryKey(),
            'image_display' => $this->text(),
            'description' => $this->string(500),
            'content' => $this->text(),
            'status' => $this->integer(11),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('new');
    }
}
