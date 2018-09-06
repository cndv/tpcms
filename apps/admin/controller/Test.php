<?php
/**
 * Created by PhpStorm.
 * User: colin
 * Date: 2018/9/1
 * Time: 下午2:09
 */

namespace app\admin\controller;



use think\Controller;
use app\common\traits\Aide;


class Test extends Common
{
    use Aide;
    //定义使用变量
    protected $model = 'test';

    public function index(){

        echo $this->model;
        exit;
        dump(config());

        $name = 'UserName';

        echo parse_string($name);

//        echo strtolower(trim(preg_replace("/[A-Z]/", "_\\0", $name), "_"));

        //$data = get_menu(1);
//        echo "ssss";
    }



}