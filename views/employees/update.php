<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Employees $model */
Yii::$app->language = 'ru';
$this->title = 'Редактирование Сотрудника ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Сотрудники', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="employees-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
