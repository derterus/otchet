<?php

use app\models\Products;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ProductsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

Yii::$app->language = 'ru';

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавление Товара', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Название',
            'Бренд',
            'Категория',
            'Цена',
            'Количество',
            'Описание:ntext',
            [    'attribute' => 'Картинка',
    'format' => 'html',
    'value' => function ($data) {
        if (filter_var($data['Картинка'], FILTER_VALIDATE_URL)) {
            // Если фотография является гиперссылкой
            return Html::img($data['Картинка'], ['width' => '150px']);
        } else {
            // Если фотография является путем к файлу
            return Html::img('@web/img/products/' . $data['Картинка'], ['width' => '150px']);
        }
    },
],
            'Срок_годности',
            'Поставщик',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Products $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
