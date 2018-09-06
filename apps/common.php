<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://net75.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 杜春渔 <cndv@sina.com>
// +----------------------------------------------------------------------

// 应用公共文件
/**
 * @param uid 获取当前用户权限菜单
 * @return array
 */
function get_menu($uid){
    //实例化当前树
    $tree = new \Tree\Node\Node();
    //获取当前用户权限菜单
    $menu = new \think\auth\Auth();
}



/**
 * 解析字符串的命名空间
 * @access public
 * @param string $model 模型名（或者完整类名）
 * @return string
 * @author colin <cndv@sina.com>
 */
function parse_string($name, $type = 0, $ucfirst = true)
{
    if ($type) {
        $name = preg_replace_callback('/_([a-zA-Z])/', function ($match) {
            return strtoupper($match[1]);
        }, $name);
        return $ucfirst ? ucfirst($name) : lcfirst($name);
    }
    return strtolower(trim(preg_replace("/[A-Z]/", "_\\0", $name), "_"));
}



