<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Products $model */
Yii::$app->language = 'ru';

$this->title = 'Редактирование Товара: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Товары', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="products-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
