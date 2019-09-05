<?php

namespace app\manual;

use app\interfaces\Base;

class MagicConstant implements Base
{
    /**
     * 魔术常量
     */
    public function index()
    {

        echo __LINE__ . '<br/>'; //文件中的当前行号
        echo __FILE__ . '<br/>'; //文件的完整路径和文件名。
        echo __DIR__ . '<br/>';  //文件所在的目录
        echo __FUNCTION__ . '<br/>'; //函数名称
        echo __CLASS__ . '<br/>'; //类的名称
        echo __TRAIT__ . '<br/>';  //Trait 的名字
        echo __METHOD__ . '<br/>';  //类的方法名
        echo __NAMESPACE__ . '<br/>';  //当前命名空间的名称（区分大小写）

//        结果如下:
//        11
//        D:\wamp64\www\PHPRepository\app\manual\MagicConstant.php
//        D:\wamp64\www\PHPRepository\app\manual
//        index
//        app\manual\MagicConstant
//
//        app\manual\MagicConstant::index
//        app\manual

    }


}