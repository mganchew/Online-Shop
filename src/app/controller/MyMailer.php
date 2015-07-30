<?php
/**
 * Created by PhpStorm.
 * User: mladen
 * Date: 15-7-29
 * Time: 10:50
 */

namespace app\controller;


class MyMailer extends Controller{

    public function index(){

        return ["mail/index.php"] ;

    }

    public function checkMail(\app\model\MyMailer $model,$arr){

        foreach($arr as $key => $val){

            $method = 'set' . ucfirst($key);

            call_user_func(array($model, $method), $val);

        }

        $toReturn = ['mail/checkMail.php',$model];

        return $toReturn;

    }

}