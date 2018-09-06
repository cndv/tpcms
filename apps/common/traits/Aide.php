<?php
/**
 * Created by PhpStorm.
 * User: colin
 * Date: 2018/7/22
 * Time: 下午4:19
 */
namespace app\common\traits;

use think\Controller;
use think\Db;
use think\Session;
use think\View;

trait Aide
{
    //后台助手类
    /**
     * 公共方法 首页
     */
    public function index(){
        
        return $this->fetch();
    }

    /**
     * 公共方法 展示列表
     * @param
     * @return vido
     */

    public function lis(){

        return $this->fetch();
        //return json();
    }

    /**
     * 公共方法 搜索
     * @param string || array
     * @return data
     */
    protected function _search($search){

        $this->model->getLimit($search,[0,20]);

        return $data;
    }

    /**
     * 公共方法 添加
     * @param
     * @return vido
     */
    public function tadd(){

        $this->fetch();
    }

    /**
     * 公共方法 添加执行
     * @param array
     * @return bool
     */
    public function install(){

    }
    /**
     * 公共方法 编辑
     * @param
     * @return vido
     */
    public function tedit(){

        $this->fetch();
    }
    /**
     * 公共方法 更新
     * @param array
     * @return bool
     */
    public function update(){

    }
    /**
     * 公共方法 删除
     * @param id
     * @return bool
     */
    public function del(){

    }

    /**
     * 公共方法 状态
     * @param id
     * @return bool
     */
    public function cs(){

    }
    /**
     * 公共方法 硬删除
     * @param id
     * @return bool
     */
    public function remove(){


    }
}