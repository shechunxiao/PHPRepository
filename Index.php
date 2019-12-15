<?php

use app\Entry;
use app\manual\DataType;
use app\manual\Magic;
use app\manual\MagicConstant;

require 'bootstrap/app.php'; //composer自动加载
require 'app/Constant.php'; //定义常量
/**
 * 公共测试入口，只要修改对象和方法即可
 */
//$entry = new Entry();
//$entry(new DataType(), 'index');
//$entry(new MagicConstant(), 'index');
//$entry(new Magic(), 'index');

/**
 * magic魔术方法
 */
//$magic = new Magic();
//echo $magic->name;
//$magic->selfVar = 'selfVar';
//$magic->showSelfVar();
//if (isset($magic->selfVar)){
//    echo '能调用';
//}else{
//    echo '不能调用';
//}
//unset($magic->selfVar);
//echo $magic;
//
//$magic2 = clone $magic;
//echo $magic2->name;

/**
 * 数组函数研究
 */
//$array = new \app\manual\ArrayStudy();
//$array->index();

/**
 * 字符串函数研究
 */
//$string = new \app\manual\StringStudy();
//$string->index();

/**
 * 类和对象
 */
//$classAndObject = new \app\manual\ClassAndObject();
//$classAndObject->index();

/**
 * PCRE函数
 */
//$preg = new \app\manual\Preg();
//$preg->index();

/**
 * BC高精度数字函数
 */
//$bc = new \app\manual\Bc();
//$bc->index();

/**
 * GD库
 */
//$gd = new \app\manual\GD();
//$gd->index();

$arr = [
    ['A1', 'A2', 'A3'],
    ['B1', 'B2'],
    ['C1'],
    ['D1','D2','D3','D4','D5']
];
$brr = [
    ['A1','A2'],
    ['B1','B2','B3'],
    ['C1','C2','C3','C4'],
    ['D1','D2'],
];

function test($arr)
{
    $result = array_reduce($arr,function($v,$m){
        $temp = [];
        foreach ($v as $vv){
            foreach ($m as $mm){
                if (empty($vv)){
                    $temp[] = $mm;
                }else{
                    $temp[] = $vv.';'.$mm;
                }
            }
        }
        return $temp;
    },['']);
    return $result;
}

$result = test($brr);
var_dump($result);





