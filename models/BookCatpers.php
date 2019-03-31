<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book_catpers".
 *
 * @property int $id
 * @property int $Chapters_id
 * @property int $Book_id
 *
 * @property Book $book
 * @property Chapters $chapters
 */
class BookCatpers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book_catpers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Chapters_id', 'Book_id'], 'required'],
            [['Chapters_id', 'Book_id'], 'integer'],
            [['Book_id'], 'exist', 'skipOnError' => true, 'targetClass' => Book::className(), 'targetAttribute' => ['Book_id' => 'id']],
            [['Chapters_id'], 'exist', 'skipOnError' => true, 'targetClass' => Chapters::className(), 'targetAttribute' => ['Chapters_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Chapters_id' => 'Chapters ID',
            'Book_id' => 'Book ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBook()
    {
        return $this->hasOne(Book::className(), ['id' => 'Book_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChapters()
    {
        return $this->hasOne(Chapters::className(), ['id' => 'Chapters_id']);
    }
}
