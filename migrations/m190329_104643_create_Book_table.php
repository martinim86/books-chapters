<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Book}}`.
 */
class m190329_104643_create_Book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Book}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%Book}}');
    }
}
