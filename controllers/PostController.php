<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 02.06.2018
 * Time: 12:14
 */

namespace app\controllers;
use app\models\Post;
use yii\data\Pagination;
use yii\web\HttpException;


class PostController extends AppController
{
    public function actionIndex() {
        //$posts = Post::find()->select('id, mail, name')->orderBy('id DESC')->all();
        $query = Post::find()->select('id, mail, name')->orderBy('id DESC');
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 50, 'pageSizeParam' => false, 'forcePageParam' => false]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
        //$this->debug($posts);
        return $this->render('index', compact('posts', 'pages'));
    }
    public function actionView() {
        $id = \Yii::$app->request->get('id');
        $post = Post::findOne($id);
        if(empty($post)) throw new HttpException(404, 'Page not found');
        return $this->render('view', compact('post'));
    }
    public function actionTest() {
        return $this->render('test');
    }
}