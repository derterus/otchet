<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\EmployeesSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="employees-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Имя') ?>

    <?= $form->field($model, 'Фамилия') ?>

    <?= $form->field($model, 'Отчество') ?>

    <?= $form->field($model, 'Должность') ?>

    <?php // echo $form->field($model, 'Зарплата') ?>

    <?php // echo $form->field($model, 'Адрес') ?>

    <?php // echo $form->field($model, 'Телефон') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'Фотография') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
