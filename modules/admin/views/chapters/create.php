<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Chapters */

$this->title = Yii::t('app', 'Create Chapters');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Chapters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chapters-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
