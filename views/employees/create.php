<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Employees $model */
Yii::$app->language = 'ru';
$this->title = 'Добавление сотрудника';
$this->params['breadcrumbs'][] = ['label' => 'Сотрудники', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employees-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
