<?php

use yii\db\Migration;

class m171011_161728_add_new_column_news extends Migration
{
    public function up()
    {
        $this->addColumn('news','is_hot',$this->integer(11));
        $this->addColumn('news','icon',$this->string(255));
    }

    public function down()
    {
        echo "m171011_161728_add_new_column_news cannot be reverted.\n";

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
