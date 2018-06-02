<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 02.06.2018
 * Time: 12:14
 */

namespace app\controllers;


class PostController extends AppController
{
    public function actionIndex($name = 'null') {
        $hello = 'Hello, World!';
        $hi = 'Hi!';
        return $this->render('index', compact('hello', 'hi', 'name'));
    }
    public function actionTest() {
        return $this->render('test');
    }
}