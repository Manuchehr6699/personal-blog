<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 06.12.2019
 * Time: 19:39
 */

namespace app\controllers;


use app\models\Blog;
use app\models\Comment;
use yii\data\Pagination;
use yii\db\Exception;
use yii\db\Expression;
use yii\helpers\Html;
use yii\web\Controller;
use yii\web\Cookie;

class BlogController extends Controller
{

   public function actionMyTweets(){

      return $this->render('my-tweets');
   }

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
        $commentModel = new Comment();

        if($commentModel->load(\Yii::$app->request->post())){
           $commentModel->is_published = 'no';
           $commentModel->status=1;
           $commentModel->created_at = time();
           if(empty($commentModel->blog_id)) $commentModel->blog_id = $post['id'];
           if($commentModel->save()){
              \Yii::$app->session->setFlash('success_saved', 'Your comment was sent successfully!');
           }else{
              \Yii::$app->session->setFlash('error_saved', 'Somethink went wrong!');
           }
           return $this->redirect(['/blog/post/'.$post['alias']]);
        }

        $comments_list = Comment::find()->select(['comment.*', 'username'])
            ->leftJoin('user u', 'u.user_id = comment.updated_by')
            ->where(['comment.is_published' => 'yes'])->andWhere(['comment.blog_id' => $post['id']])
            ->asArray()->all();

        return $this->render('post', [
            'post' => $post,
            'commentModel' => $commentModel,
            'comments_list' => $comments_list
        ]);
    }

    public function actionPostsByTag($tag){
        $tag = Html::encode($tag);
        $query = Blog::find()
            ->select([
                'b.id', 'b.title', 'b.text', 'b.photo', 'b.alias', 'b.tags',
                'b.like_count', 'b.created_at', 'b.created_by', 'u.username'])
            ->from('blog b')
            ->leftJoin( 'user u', 'b.created_by = u.user_id')
            ->where(['b.status' => 1])
            ->andWhere(['LIKE', 'b.tags', $tag])
            ->orderBy('b.created_at DESC');
        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize' => 8,
            'forcePageParam' => false,
            'pageSizeParam' => false
        ]);

        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('posts-by-tag', [
            'posts' => $posts,
            'pages' => $pages,
            'tag' => $tag
        ]);
    }

    public function actionPostsCategory($category){
        $category = Html::encode($category);
        $query = Blog::find()
            ->select([
                'b.id', 'b.title', 'b.text', 'b.photo', 'b.alias', 'b.tags',
                'b.like_count', 'b.created_at', 'b.created_by', 'bc.*'
            ])
            ->from('blog b')
            ->leftJoin( 'blog_category bc', 'b.id = bc.blog_id')
            ->leftJoin( 'category c', 'bc.category_id = c.id')
            ->where(['b.status' => 1, 'bc.status' => 1, 'c.status' => 1])
            ->andWhere(['LIKE', 'c.name', $category])
            ->orderBy('b.created_at DESC');

        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize' => 8,
            'forcePageParam' => false,
            'pageSizeParam' => false
        ]);

        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('posts-category', [
            'posts' => $posts,
            'pages' => $pages,
            'category' => $category
        ]);
    }


    public function actionLike(){
       if(\Yii::$app->request->get()){
          $id = Html::encode($_GET['id']);
          if(!empty($id)){
              if(\Yii::$app->response->cookies->has('k'.$id)){
                  \Yii::$app->response->cookies->remove('k'.$id)->remove();
                  \Yii::$app->db->createCommand('UPDATE blog SET like_count = like_count-1 WHERE id = '.$id)->execute();
                  $like_count = Blog::find()->select('like_count')->where(['id' => $id])->one();
                  $like_count = ($like_count == 0 || $like_count == null || $like_count < 1) ? 1 : $like_count;
                  $data = (array('status' => 'success', 'like_count' => $like_count['like_count']));
                  return json_encode($data);
              }else{
                  try{
                      \Yii::$app->db->createCommand('UPDATE blog SET like_count = like_count+1 WHERE id = '.$id)->execute();
                      $like_count = Blog::find()->select('like_count')->where(['id' => $id])->one();
                      $cookie = new Cookie([
                          'name' => 'k'.$id,
                          'value' => $id,
                          'expire' => time() + 86400 * 365,
                      ]);
                      \Yii::$app->response->cookies->add($cookie);
                      $like_count = ($like_count == 0 || $like_count == null || $like_count < 1) ? 1 : $like_count;
                      $data = (array('status' => 'success', 'like_count' => $like_count['like_count']));
                      return json_encode($data);
                  }catch (Exception $e){
                      $data = (array('status' => 'error'));
                      return json_encode($data);
                  }
              }
          }else{
              $data = (array('status' => 'error'));
              return json_encode($data);
          }
       }
    }

}