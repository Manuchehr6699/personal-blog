<?php
/**
 * Created by PhpStorm.
 * User: IT_User-144
 * Date: 21.11.2019
 * Time: 15:02
 */

namespace app\controllers;
use Yii;
use yii\web\Controller;

class MainController extends Controller
{

   public function actionIndex(){


      return $this->render('index');
   }

}