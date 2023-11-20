<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

Yii::$app->language = 'ru';

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="body-content-center">
    <div class="row">
        <div class="col-lg-12 mb-3 d-flex">
            <h1>Наши контакты</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 mb-3 d-flex">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Генеральный Директор</h2>
                    <img class="card-img" src="https://www.kino-teatr.ru/art/6027/86749.jpg">
                    <p class="card-text">Иван Иванов</p>
                    <p class="card-text">Email: ivanov@company.com</p>
                    <p class="card-text">Телефон: +7 123 456 78 90</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-3 d-flex">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Менеджер по продажам</h2>
                    <img class="card-img"
                        src="https://s5.stc.all.kpcdn.net/afisha/msk/wp-content/uploads/sites/5/2023/09/aleksej-petruhin-600x600.jpg">
                    <p class="card-text">Алексей Петрухин</p>
                    <p class="card-text">Email: petruhin@company.com</p>
                    <p class="card-text">Телефон: +7 098 765 43 21</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-3 d-flex">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Технический директор</h2>
                    <img class="card-img" src="https://kuban24.tv/wp-content/uploads/2023/03/foto1-25-640x480.jpg">
                    <p class="card-text">Алексей Смирнов</p>
                    <p class="card-text">Email: smirnov@company.com</p>
                    <p class="card-text">Телефон: +7 345 678 90 12</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-3 d-flex">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Главный бухгалтер</h2>
                    <img class="card-img"
                        src="https://fhr.ru/upload/resize_cache/iblock/163/800_600_2/01_20230615_CHANCE_BND_16.jpg">
                    <p class="card-text">Андрей Соколов</p>
                    <p class="card-text">Email: sokolov@company.com</p>
                    <p class="card-text">Телефон: +7 234 567 89 01</p>
                </div>
            </div>
        </div>
    </div>
</div>