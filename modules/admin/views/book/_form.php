<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>


    <?php
    echo 'Главы относящиеся к этой книге: '.'<br>';
    foreach ($chapters as $books) {
        foreach ($books->chapters as $chapter) {
            echo '<a href="'.Yii::$app->urlManager->createUrl(['admin/chapters/update', 'id' => $chapter->id]).'">';
            echo $chapter->name.'</a><br>';
       }
    }
    ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name:ntext',
            'page_from',
            'page_to',

            ['class' => 'yii\grid\ActionColumn'],

        ],
    ]); ?>

</div>
