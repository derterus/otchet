<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ProductsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="products-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Название') ?>

    <?= $form->field($model, 'Бренд') ?>

    <?= $form->field($model, 'Категория') ?>

    <?= $form->field($model, 'Цена') ?>

    <?php // echo $form->field($model, 'Количество') ?>

    <?php // echo $form->field($model, 'Описание') ?>

    <?php // echo $form->field($model, 'Картинка') ?>

    <?php // echo $form->field($model, 'Срок_годности') ?>

    <?php // echo $form->field($model, 'Поставщик') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
