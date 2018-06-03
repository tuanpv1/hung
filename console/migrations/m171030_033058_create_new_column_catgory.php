<?php

use yii\db\Migration;

class m171030_033058_create_new_column_catgory extends Migration
{
    public function up()
    {
        $this->addColumn('category','image',$this->string(255));
    }

    public function down()
    {
        echo "m171030_033058_create_new_column_catgory cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
