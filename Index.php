<?php

use app\Entry;
use app\manual\DataType;
use app\manual\Magic;
use app\manual\MagicConstant;
use app\manual\NewArray;
use app\manual\NewDate;

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

///**
// * 数组函数研究
// */
//$array = new \app\manual\ArrayStudy();
//$array->index();
// 新数组研究

//$newArray = new NewArray();
//$newArray->index();




///**
// * 字符串函数研究
// */
//$string = new \app\manual\StringStudy();
//$string->index();

//$newString = new \app\manual\NewString();
//$newString->index();

// 时间函数
//$date = new NewDate();
//$date->index();

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
$bc = new \app\manual\Bc();
$bc->index();

/**
 * GD库
 */
//$gd = new \app\manual\GD();
//$gd->index();

/**
 * 公共函数
 */
//$common = new \app\manual\CommonFunction();
//$common->index();

/**
 * 图片覆盖
 */
//$content = file_get_contents('pic.png');
//file_put_contents('qr.jpg',$content);

/**
 * 目录
 */
//$directory = new \app\manual\Directory();
//$directory->index();

/**
 * 尾部去掉零
 */
//function decimalRemoveZero($args){
//    if($args == ceil($args)){
//        $data = (int)$args;
//    }elseif( 10*$args == ceil(10*$args)){
//        $data = (int)(10*$args)/10;
//    }else{
//        $data = $args;
//    }
//    return $data;
//}

//var_dump(decimalRemoveZero(0.00));

//$str = "张    三  发送 \r到发 方\n 式\r\n 订   单\t";
//var_dump($str);
//$str = str_replace(array("\r\n", "\r", "\n"," "), "", $str);
//var_dump($str);
//
//$headerInfo = ['商品条码','商品名称','商品分类','库存单位','参与优惠','单规格','建议零售价','规格条码','规格1','规格'];
//$headerInfo = array_slice($headerInfo,0,9);
//var_dump($headerInfo);








