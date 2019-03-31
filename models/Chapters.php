<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Chapters".
 *
 * @property int $id
 * @property string $name
 * @property int $page_from
 * @property int $page_to
 *
 * @property BookCatpers[] $bookCatpers
 */
class Chapters extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Chapters';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string'],
            [['page_from', 'page_to'], 'integer'],
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
            'page_from' => 'Page From',
            'page_to' => 'Page To',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookCatpers()
    {
        return $this->hasMany(BookCatpers::className(), ['Chapters_id' => 'id']);
    }
    
}
