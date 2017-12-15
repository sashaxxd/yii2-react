<?php

use yii\db\Schema;
use yii\db\Migration;


/**
 * Class m171214_225816_create_table_news
 */
class m171214_225816_create_table_news extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('news', [
            'id' => Schema::TYPE_PK,
            'categoryId' => Schema::TYPE_INTEGER,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_TEXT,
            'fulltext' => Schema::TYPE_TEXT
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('news');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171214_225816_create_table_news cannot be reverted.\n";

        return false;
    }
    */
}
