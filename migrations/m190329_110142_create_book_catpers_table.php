<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book_catpers}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%Chapters}}`
 * - `{{%Book}}`
 */
class m190329_110142_create_book_catpers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%book_catpers}}', [
            'id' => $this->primaryKey(),
            'Chapters_id' => $this->integer()->notNull(),
            'Book_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `Chapters_id`
        $this->createIndex(
            '{{%idx-book_catpers-Chapters_id}}',
            '{{%book_catpers}}',
            'Chapters_id'
        );

        // add foreign key for table `{{%Chapters}}`
        $this->addForeignKey(
            '{{%fk-book_catpers-Chapters_id}}',
            '{{%book_catpers}}',
            'Chapters_id',
            '{{%Chapters}}',
            'id',
            'CASCADE'
        );

        // creates index for column `Book_id`
        $this->createIndex(
            '{{%idx-book_catpers-Book_id}}',
            '{{%book_catpers}}',
            'Book_id'
        );

        // add foreign key for table `{{%Book}}`
        $this->addForeignKey(
            '{{%fk-book_catpers-Book_id}}',
            '{{%book_catpers}}',
            'Book_id',
            '{{%Book}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%Chapters}}`
        $this->dropForeignKey(
            '{{%fk-book_catpers-Chapters_id}}',
            '{{%book_catpers}}'
        );

        // drops index for column `Chapters_id`
        $this->dropIndex(
            '{{%idx-book_catpers-Chapters_id}}',
            '{{%book_catpers}}'
        );

        // drops foreign key for table `{{%Book}}`
        $this->dropForeignKey(
            '{{%fk-book_catpers-Book_id}}',
            '{{%book_catpers}}'
        );

        // drops index for column `Book_id`
        $this->dropIndex(
            '{{%idx-book_catpers-Book_id}}',
            '{{%book_catpers}}'
        );

        $this->dropTable('{{%book_catpers}}');
    }
}
