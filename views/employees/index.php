<?php

use app\models\Employees;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\EmployeesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

Yii::$app->language = 'ru';

$this->title = 'Сотрудники';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employees-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить Сотрудника', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Имя',
            'Фамилия',
            'Отчество',
            'Должность',
            'Зарплата',
            'Адрес',
            'Телефон',
            'email:email',
            [    'attribute' => 'Фотография',
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
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Employees $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
