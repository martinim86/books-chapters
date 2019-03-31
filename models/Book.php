<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Book".
 *
 * @property int $id
 * @property string $name
 *
 * @property BookCatpers[] $bookCatpers
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookCatpers()
    {
        return $this->hasMany(BookCatpers::className(), ['Book_id' => 'id']);
    }
    public function getChapters()
    {
        return $this->hasMany(Chapters::className(), ['id' => 'Chapters_id'])
        ->viaTable('book_catpers', ['Book_id' => 'id']);
    }
}
