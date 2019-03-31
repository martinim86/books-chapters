<?php
namespace app\controllers;

use yii\rest\ActiveController;

class MyController extends ActiveController
{
    public $modelClass = 'app\models\Book';
}
