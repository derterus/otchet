<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();

echo $form->field($model,"radius")->textInput();
echo $form->field($model,"height")->textInput();

echo Html::submitButton("Вычислить", ["class"=> " btn btn-success"]);
ActiveForm::end();

if(isset($coneArea) && isset($coneVolum) && isset($cylinderArea) && isset($cylinderVolum)){
echo "<br>";
echo "Площадь конуса: ".$coneArea ."<br>";
echo "Объем конуса: ".$coneVolum ."<br>";
echo "Площадь цилиндра: ".$cylinderArea ."<br>";
echo "Объем уилиндра: ".$cylinderVolum ."<br>";
}
?>