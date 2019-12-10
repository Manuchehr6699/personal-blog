<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 06.12.2019
 * Time: 19:39
 */

namespace app\controllers;


use app\models\Blog;
use yii\data\Pagination;
use yii\db\Exception;
use yii\helpers\Html;
use yii\web\Controller;

class BlogController extends Controller
{

    public function actionPosts(){


       $query = Blog::find()
           ->select([
               'b.id', 'b.title', 'b.text', 'b.photo', 'b.alias', 'b.tags',
               'b.like_count', 'b.created_at', 'b.created_by', 'u.username'])
           ->from('blog b')
           ->leftJoin( 'user u', 'b.created_by = u.user_id')
           ->where(['b.status' => 1])->orderBy('b.id DESC');
       $pages = new Pagination([
           'totalCount' => $query->count(),
           'pageSize' => 8,
           'forcePageParam' => false,
           'pageSizeParam' => false
       ]);

        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('posts', [
            'posts' => $posts,
            'pages' => $pages
        ]);
    }

    public function actionPost($alias){

        $alias = Html::encode($alias);
        $post = Blog::find()->where(['alias' => $alias])->asArray()->one();

        return $this->render('post', [
            'post' => $post
        ]);
    }





    public function actionLike(){
       if(\Yii::$app->request->get()){
          $id = Html::encode($_GET['id']);
          try{
             $like_count = Blog::find()->select('like_count')->where(['id' => $id])->one();
             \Yii::$app->db->createCommand('UPDATE blog SET like_count = like_count+1 WHERE id = '.$id)->execute();
             $data = serialize(array('status' => 'success', 'like_count' => $like_count));
          }catch (Exception $e){
             $data = serialize(array('status' => 'error'));
          }
          return $data;
       }
    }
}