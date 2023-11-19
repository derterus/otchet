<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Products $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Товары', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
        ],
    ]) ?>

</div>
