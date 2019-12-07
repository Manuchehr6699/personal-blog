<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 06.12.2019
 * Time: 19:39
 */

namespace app\controllers;


use app\models\Blog;
use yii\web\Controller;

class BlogController extends Controller
{

    public function actionPosts(){

        $posts = Blog::find()->where(['status' => 1])->asArray()->all();
        return $this->render('posts', [
            'posts' => $posts
        ]);
    }
}