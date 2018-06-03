<?php

use yii\db\Migration;

class m171030_030843_create_new_column_category extends Migration
{
    public function up()
    {
        $this->addColumn('category','is_display',$this->integer(11));
    }

    public function down()
    {
        echo "m171030_030843_create_new_column_category cannot be reverted.\n";

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
