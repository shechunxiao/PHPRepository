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
$array = new \app\manual\ArrayStudy();
$array->index();

$a = [1,2,3,4,5];
$is = array_search(2,$a,true);
if ($is != false){
    echo 'you';
}else{
    echo '没有';
}

var_dump($is);



/**
 * 字符串函数研究
 */










