<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 13.11.2019
 * Time: 21:20
 */

namespace app\modules\admin\controllers;


use yii\web\Controller;

class MainController extends Controller
{

    public function actionLogin(){

        return $this->render('login');
    }
}