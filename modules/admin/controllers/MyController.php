<?php
namespace app\modules\admin\controllers;

use yii\rest\ActiveController;

class MyController extends ActiveController
{
    public $modelClass = 'app\models\Book';
}
