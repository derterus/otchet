<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Employees".
 *
 * @property int $id
 * @property string $Имя
 * @property string $Фамилия
 * @property string $Отчество
 * @property string $Должность
 * @property float $Зарплата
 * @property string $Адрес
 * @property string $Телефон
 * @property string $email
 * @property string $Фотография
 */
class Employees extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Employees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Имя', 'Фамилия', 'Отчество', 'Должность', 'Зарплата', 'Адрес', 'Телефон', 'email', 'Фотография'], 'required'],
            [['Зарплата'], 'number'],
            [['Имя', 'Фамилия', 'Отчество', 'Должность', 'Адрес', 'email', 'Фотография'], 'string', 'max' => 255],
            [['Телефон'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Имя' => 'Имя',
            'Фамилия' => 'Фамилия',
            'Отчество' => 'Отчество',
            'Должность' => 'Должность',
            'Зарплата' => 'Зарплата',
            'Адрес' => 'Адрес',
            'Телефон' => 'Телефон',
            'email' => 'Email',
            'Фотография' => 'Фотография',
        ];
    }
}
