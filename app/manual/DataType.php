<?php

namespace app\manual;

use app\interfaces\Base;

class DataType implements Base
{
    /**
     * 数据类型
     *  PHP 支持 8 种原始数据类型。
     *
     * 四种标量类型：
     * ◦ boolean（布尔型） true or false
     * ◦ integer（整型）
     * ◦ float（浮点型，也称作 double)
     * ◦ string（字符串）
     *
     * 两种复合类型：
     * ◦ array（数组）
     * ◦ object（对象）
     *
     * 最后是两种特殊类型：
     * ◦ resource（资源）
     * ◦ NULL（无类型）  被赋值为NULL,尚未被赋值,被unset()
     *
     * 为了确保代码的易读性，本手册还介绍了一些伪类型：
     * ◦ mixed（混合类型）
     * ◦ number（数字类型）
     * ◦ callback（回调类型） Closure
     *
     * 以及伪变量 $...。
     *
     * //强制类型转换
     * (int), (integer) - 转换为整形 integer
     * ◦ (bool), (boolean) - 转换为布尔类型 boolean
     * ◦ (float), (double), (real) - 转换为浮点型 float
     * ◦ (string) - 转换为字符串 string
     * ◦ (array) - 转换为数组 array
     * ◦ (object) - 转换为对象 object
     * ◦ (unset) - 转换为 NULL (PHP 5)
     * ◦ (binary) 转换和 b 前缀转换支持为 PHP 5.2.1 新增。
     *
     */
    public function index(...$arguments)
    {

        var_dump($arguments);
        $a = 1000;
        var_dump((binary)$a);

    }


}