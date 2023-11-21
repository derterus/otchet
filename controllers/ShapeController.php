<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Cone;
use app\models\Cylinder;
use app\models\ShapeForm;

class ShapeController extends Controller{
    public function actionIndex(){
        $model = new ShapeForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()){
            $radius = $model->radius;
            $height = $model->height;
            $cone=new Cone($radius,$height);
            $cylinder=new Cylinder($radius,$height);
            return $this->render('index',[
                'model'=>$model,
                'coneArea'=>$cone->getArea(),
                'coneVolum'=>$cone->getValue(),
                'cylinderArea'=>$cylinder->getArea(),
                'cylinderVolum'=>$cylinder->getValue(),
            ]);
        }
        return $this->render('index',[
            'model'=>   $model,
        ]);

    }
}