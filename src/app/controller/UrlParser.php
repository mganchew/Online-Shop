<?php
/**
 * Created by PhpStorm.
 * User: mladen
 * Date: 15-7-29
 * Time: 10:59
 */

namespace app\controller;

class UrlParser
{

    public function parse()
    {

        $parts = explode("/", $_SERVER['PATH_INFO']);

        foreach ($parts as $key => $part) {
            if ($part == '') {
                unset($parts[$key]);
            }
        }

        $class = "app\\controller\\" . trim($parts[1]);
        if (isset($parts[2])) {
            $method = trim($parts[2]);
        } else {
            $method = 'index';
        }
        $arr = $_REQUEST;
        $a = new $class();
        $buildModel = "app\\model\\" . trim($parts[1]);

        $model = new $buildModel();
        if (!empty($arr)) {

            $returnedValues = $a->$method($model, $arr);
            $params = $returnedValues[1];
            $data['params'] = $params;

        } else {

            $returnedValues = $a->$method();

        }
        $view = $returnedValues[0];
        $data['view'] = $view;

        return $data;

    }

}