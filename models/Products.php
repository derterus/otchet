<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Products".
 *
 * @property int $id
 * @property string $Название
 * @property string $Бренд
 * @property string $Категория
 * @property float $Цена
 * @property int $Количество
 * @property string $Описание
 * @property string $Картинка
 * @property string|null $Срок_годности
 * @property string|null $Поставщик
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Название', 'Бренд', 'Категория', 'Цена', 'Количество', 'Описание', 'Картинка'], 'required'],
            [['Цена'], 'number'],
            [['Количество'], 'integer'],
            [['Описание'], 'string'],
            [['Название', 'Бренд', 'Категория', 'Картинка', 'Срок_годности', 'Поставщик'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Название' => 'Название',
            'Бренд' => 'Бренд',
            'Категория' => 'Категория',
            'Цена' => 'Цена',
            'Количество' => 'Количество',
            'Описание' => 'Описание',
            'Картинка' => 'Картинка',
            'Срок_годности' => 'Срок Годности',
            'Поставщик' => 'Поставщик',
        ];
    }
}
