<?php
/**
 * Created by PhpStorm.
 * User: colin
 * Date: 2018/9/2
 * Time: 下午1:43
 */

namespace app\admin\model;


use think\Model;

class Common extends Model
{



    /**
     * 插入数据
     */
    public function ins($data){
        return $this->save($data);
    }

    /**
     * 通用查询语句
     */
    public function getAll($where=[],$field='*',$limit=[]){

        return $this->where($where)->field($field)->select();
    }

    /**
     * 查询指定条数
     */
    public function getLimit($where=[],$limit=[],$field='*'){
        return $this->where($where)->limit($limit)->field($field)->select();
    }



    /**
     * 从新封装关联模型
     */
    //一对一关联
    public function hO($table , $where = [] , $field = '*' , $sort = '' , $primary = '' , $foreign = ''){
        //判断是否是自定义的 主键 外键A
        $tpf = $primary ? $table . ',' . $primary . ',' . $foreign : $table;

        return $this->hasOne($tpf)
            ->where($where)
            ->field($field)
            ->order($sort);
    }



}