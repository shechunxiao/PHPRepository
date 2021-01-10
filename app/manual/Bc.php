<?php


namespace app\manual;

use app\interfaces\Base;

class Bc implements Base{

    public function index()
    {
        /**
         *  加法
         *  string bcadd( string $left_operand, string $right_operand[, int $scale]
         *      返回值:2个操作数求和之后的结果以字符串返回
         *      left_operand
                    左操作数，字符串类型
                right_operand
                    右操作数，字符串类型、
         *
                scale
                    此可选参数用于设置结果中小数点后的小数位数。也可通过使用 bcscale() 来设置全局默认的小数位数，用于所有函数。
         */
//        $result = bcadd(12.3344,15.2255,3);
//        var_dump($result);
        /**
         *  减法
         *  string bcsub( string $left_operand, string $right_operand[, int $scale = int] )
         */
//        $result = bcsub(12.313,13.131323,2);
//        var_dump($result);
        /**
         *  乘法
         *  string bcmul( string $left_operand, string $right_operand[, int $scale = int] )
         */
//        $result = bcmul(1243.11,1.2321,2);
//        var_dump($result);
        /**
         *  除法
         *  string bcdiv( string $left_operand, string $right_operand[, int $scale = int] )
         */
//        $result = bcdiv(12.33,10.25,2);
//        var_dump($result);
//        $result = bcdiv(12.33,0,2);
//        var_dump($result);
        /**
         *  取模
         *  string bcmod( string $left_operand, string $modulus)
         */
//        $result = bcmod(16.01,7);
//        var_dump($result);
        /**
         *  二次方根
         *  string bcsqrt( string $operand[, int $scale] )
         */
//        $result = bcsqrt(12.13,2);
//        var_dump($result);
//        $result = bcsqrt(2,2);
//        var_dump($result);
        /**
         *  任意精度数字的成方  a的n次方
         *  string bcpow( string $left_operand, string $right_operand[, int $scale] )
         */
//        $result = bcpow(2.01,3,2);
//        var_dump($result);
        /**
         *  比较
         *  int bccomp( string $left_operand, string $right_operand[, int $scale = int] )
         */
        $result = bccomp(8.924,3.2,2);
        var_dump($result);
        $result = bccomp(8.131,8.130,2);
        var_dump($result);





    }
}