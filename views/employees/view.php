<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Employees $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Сотрудники', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="employees-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить эту запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'Имя',
            'Фамилия',
            'Отчество',
            'Должность',
            'Зарплата',
            'Адрес',
            'Телефон',
            'email:email',
            [    'attribute' => 'photo',
            'format' => 'html',
            'value' => function ($data) {
                if (filter_var($data['Фотография'], FILTER_VALIDATE_URL)) {
                    // Если фотография является гиперссылкой
                    return Html::img($data['Фотография'], ['width' => '150px']);
                } else {
                    // Если фотография является путем к файлу
                    return Html::img('@web/img/employees/' . $data['Фотография'], ['width' => '150px']);
                }
            },
        ],
        ],
    ]) ?>

</div>
