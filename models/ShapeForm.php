<?php
namespace app\models;

use yii\base\Model;
class ShapeForm extends Model{
    public $radius;
    public $height;
    public function rules(){
        return [
        [ ['radius', 'height'], 'required'],
        [['radius','height'],'integer'],
        ];
    }
}