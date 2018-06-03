<?php

use yii\db\Migration;

/**
 * Handles adding title_column to table `home_solution_table`.
 */
class m171009_090252_add_title_column_to_home_solution_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('home_solution', 'title', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('home_solution', 'title');
    }
}
