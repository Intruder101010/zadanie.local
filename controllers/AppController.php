<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 02.06.2018
 * Time: 12:09
 */

namespace app\controllers;


use yii\web\Controller;

class AppController extends Controller
{
    public function debug($arr) {
        echo '<pre>' . print_r($arr, true) . '</pre>';
    }
}