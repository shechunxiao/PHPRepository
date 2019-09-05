<?php

namespace app\manual;

use app\interfaces\Base;
use app\Other;

class Magic implements Base
{
    /*
     * 魔术方法类
     * 魔术方法有如下几个:
     *  __construct() √
     *  __destruct()  √
     *  __autoload() √ //自动加载，参见composer  autoload.php
     *  __call() √
     *  __callStatic() √
     *  __get()   √ //读取不可访问属性的值时，__get()会被调用
     *  __set()   √ //在给不可访问属性赋值时，__set()会被调用
     *  __isset()  √ //当对不可访问属性调用 isset() 或 empty() 时，__isset() 会被调用
     *  __unset()  √  //当对不可访问属性调用 unset() 时，__unset()会被调用
     *  __sleep()
     *  __wakeup()
     *  __toString()  √ //用于一个类被当成字符串时应怎样回应,必须return一个字符串
     *  __invoke()  √  //Entry.php使用了该魔术方法
     *  __set_state()
     *  __clone()   √//当对象被复制后，PHP 5 会对对象的所有属性执行一个浅复制（shallow copy）。所有的引用属性仍然会是一个指向原来的变量的引用。
     * 当复制完成时，如果定义了 __clone() 方法，则新创建的对象（复制生成的对象）中的 __clone() 方法会被调用，可用于修改属性的值（如果有必要的话）。
     *  ____debugInfo()
     *
     * 没有√的说明不常用，没有进行详细的研究
     *
     */

    public $name;
    protected $initVar;
    private $selfVar;

    /**
     * 构造函数，主要用于数据的初始化
     * magic constructor.
     */
    public function __construct()
    {
        $this->name = 'name';
        $this->initVar = 'initVar';
        $this->selfVar = 'selfVar';
    }

    /**
     * 析构方法,主要用于数据的最后处理
     */
    public function __destruct()
    {
        unset($this->initVar); //比如这里是销毁属性
    }

    /**
     *在对象中调用一个不可访问方法时，__call() 会被调用。
     * @param $name
     * @param $arguments
     */
    public function __call($name, $arguments)
    {

        $other = new Other();
        call_user_func_array(array($other, $name), $arguments);

    }

    /**
     * 用静态方式中调用一个不可访问方法时，__callStatic() 会被调用。
     * @param $name
     * @param $arguments
     */
    public static function __callStatic($name, $arguments)
    {

        Other::otherStatic(); //静态调用

    }

    /**
     * 这里所谓的不可访问是指，作用域之外或者属性不存在的时候
     * @param $name
     * @return string
     */
    public function __get($name)
    {
        return 'get名字';
    }

    /**
     *
     * @param $name
     * @param $value\
     */
    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    /**
     * @param $name
     * @return int
     */
    public function __isset($name)
    {
        if ($name) {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * @param $name
     */
    public function __unset($name)
    {
        echo 'unset';
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return '不能当做字符串';
    }

    /**
     *
     */
    public function __clone()
    {
        $this->name = 'clone-name';
    }

    /**
     * index
     */
    public function index()
    {
        echo 'magic/index';
    }

    /**
     * test
     */
    public function test()
    {
        echo 'magic/test';
    }

    /**
     * 测试__set()方法的有效性
     */
    public function showSelfVar()
    {
        echo $this->selfVar;
    }


}
