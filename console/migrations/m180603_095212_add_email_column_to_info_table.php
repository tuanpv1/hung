<?php

use yii\db\Migration;

/**
 * Handles adding email_column to table `info_table`.
 */
class m180603_095212_add_email_column_to_info_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('info_table', 'email', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('info_table', 'email');
    }
}
