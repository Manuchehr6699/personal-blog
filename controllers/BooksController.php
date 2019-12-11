<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 10.12.2019
 * Time: 21:48
 */

namespace app\controllers;


use app\models\MyBooks;
use yii\helpers\Html;
use yii\web\Controller;

class BooksController extends Controller
{

    public function actionList(){
        $this->layout = 'main-without-sidebar';
        $data = MyBooks::find()->where(['status' => 1])->asArray()->all();
        return $this->render('list', [
            'data' => $data
        ]);
    }

    public function actionDetails($id){

        $id = Html::encode($id);
        $data = MyBooks::find()->where(['status' => 1, 'id' => $id])->asArray()->one();
        return $this->render('details', [
            'data' => $data
        ]);
    }

}