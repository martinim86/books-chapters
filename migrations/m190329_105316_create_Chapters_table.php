<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Chapters}}`.
 */
class m190329_105316_create_Chapters_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Chapters}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->text(),
            'page_from'=>$this->integer(),
            'page_to'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%Chapters}}');
    }
}
