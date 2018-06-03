<?php

use yii\db\Migration;

/**
 * Handles adding type_column to table `news_table`.
 */
class m171107_022848_add_type_column_to_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('news', 'type', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('news', 'type');
    }
}
