<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Products $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'Название')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Бренд')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Категория')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Цена')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Количество')->textInput() ?>

    <?= $form->field($model, 'Описание')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Картинка')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Срок_годности')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Поставщик')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
