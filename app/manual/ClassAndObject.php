<?php

namespace app\manual;

use app\interfaces\Base;

class ClassAndObject implements Base
{
    public $a = 1;
    public function index()
    {
        $this->operate();
    }

    /**
     *  相关方法
     */
    public function operate()
    {
        /**
         * array get_object_vars( object $obj)
         *  由 obj 指定的对象中定义的属性组成的关联数组。也就是说也可以是相关类对象的相关属性集合
         *  如果是类的对象，那么获取的是public的相关属性，如果该类继承了父类，那么获取的是public和protected的属性
         */
//        $obj = new \stdClass();
//        $obj->name = '张三';
//        $obj->age = 18;
//        $obj->value = '测试';
//        var_dump($obj);
//        $result = get_object_vars($obj);
//        var_dump($result);
//        $string = new StringStudy();
//        $result = get_object_vars($string);
//        var_dump($result);
        /**
         *  string get_class([ object $obj] )
         *  返回对象的类名(带命名空间) 如果 obj 不是一个对象则返回 FALSE。
         */
//        $string = new StringStudy();
//        $result = get_class($string);
//        var_dump($result);
        /**
         *  array get_class_vars( string $class_name)
         *      返回由类的默认公有属性组成的关联数组，此数组的元素以 varname => value 的形式存在。
         *  array get_class_methods( mixed $class_name)
         *      返回由类的方法名组成的数组。
         */
//        $result = get_class_vars(StringStudy::class);
//        var_dump($result);
//        $result = get_class_methods(StringStudy::class);
//        var_dump($result);
        /**
         *  bool class_exists( string $class_name[, bool $autoload = true] )
         *      检查指定的类是否已定义
         *      类名。名字的匹配是大小写不敏感的。
         */
//        var_dump(class_exists(StringStudy::class));
        /**
         *  bool class_alias( string $original, string $alias[, bool $autoload = TRUE] )
         *      基于用户定义的类 original 创建别名 alias。这个别名类和原有的类完全相同。
         *      成功时返回 TRUE， 或者在失败时返回 FALSE。
         *      original
                    原有的类。
                alias
                    类的别名。
                autoload
                    如果原始类没有加载，是否使用自动加载（autoload）。
         */
//        $result = class_alias(StringStudy::class,'dsd');
//        var_dump($result);
        /**
         *  string get_parent_class([ mixed $obj] )
         *      如果 obj 是对象，则返回对象实例 obj 所属类的父类名。
                如果 obj 是字符串，则返回以此字符串为名的类的父类名。此功能是在 PHP 4.0.5 中增加的。
         */
//        $result = get_parent_class(StringStudy::class);
//        var_dump($result);
        /**
         *  bool interface_exists( string $interface_name[, bool $autoload = true] )
         *      检查接口是否已被定义。
         */
//        $result = interface_exists(Base::class);
//        var_dump($result);
        /**
         *  bool is_a( object $object, string $class_name[, bool $allow_string = FALSE] )
         *      如果对象属于该类或该类是此对象的父类则返回 TRUE
         */
//        $result = is_a($this,Base::class);
//        var_dump($result);
        /**
         *  bool is_subclass_of( object $object, string $class_name)
         *      如果对象 object 所属类是类 class_name 的子类，则返回 TRUE，否则返回 FALSE
         */
//        $result = is_subclass_of($this,Base::class);
//        var_dump($result);
        /**
         *  bool method_exists( mixed $object, string $method_name)
         *      检查类的方法是否存在于指定的 object中。
         */
//        $result = method_exists($this,'index');
//        var_dump($result);
        /**
         * bool property_exists( mixed $class, string $property)
         *  本函数检查给出的 property 是否存在于指定的类中（以及是否能在当前范围内访问）。
         */
//        $result = property_exists($this,'a');
//        var_dump($result);

    }
}