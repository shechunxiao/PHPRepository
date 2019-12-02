<?php
namespace app\manual;
use app\interfaces\Base;

class ArrayStudy implements Base{

    protected $arr = [
        'one'=>'第一',
        'two'=>'第二',
        'three'=>'第三',
        'four'=>'第四',
        'five'=>['five_1','five_2','five_3','第一'],
        'six'=>true
    ];
    protected $brr = [
        'one'=>'第一',
        'two'=>1,
        'three'=>[],
        'four'=>'第一',
    ];
    protected $crr = [1,2,3,4,5,1];
    protected $drr = [];

    /**
     * 数组的研究
     */
    public function index()
    {
        $this->keyAndValue();
    }

    /**
     * 数组的键名和值
     */
    public function keyAndValue(){
        /**
         * array array_values( array $input)
         * 返回 input 数组中所有的值并给其建立数字索引(深度为一维)
         */
//        $result = array_values($this->arr);
//        var_dump($result);
        /**
         * array array_keys( array $array[, mixed $search_value[, bool $strict = false]] )
         * array_keys() 返回 input 数组中的数字或者字符串的键名。
            如果指定了可选参数 search_value，则只返回该值的键名。否则 input 数组中的所有键名都会被返回。(深度为一维)
         *  input
            一个数组，包含了要返回的键。
            search_value
                如果指定了这个参数，只有包含这些值的键才会返回。
            strict
                判断在搜索的时候是否该使用严格的比较（===)
         */
//        $result = array_keys($this->arr,'第一');
//        var_dump($result);
        /**
         *  array array_flip( array $trans)
         *  array_flip() 返回一个反转后的 array，例如 trans 中的键名变成了值，而 trans 中的值成了键名。
            注意 trans 中的值需要能够作为合法的键名，例如需要是 integer 或者 string。如果值的类型不对将发出一个警告，并且有问题的键／值对将不会反转。
            如果同一个值出现了多次，则最后一个键名将作为它的值，所有其它的都丢失了。
         */
//        $result = array_flip($this->arr); //这样会报警告,array_flip(): Can only flip STRING and INTEGER values!
//        $result = @array_flip($this->arr); //加@会不输出警告,其他不符合的过滤掉了
//        $result = @array_flip($this->brr); //如果同一个值出现多次，那么最后一个键名将作为它的值
//        var_dump($result);
        /**
         *  bool in_array( mixed $needle, array $haystack[, bool $strict = FALSE] )
         *      needle 待搜索的值
         *      haystack 这个数组
         *      strict 如果第三个参数 strict 的值为 TRUE 则 in_array() 函数还会检查 needle 的类型是否和 haystack 中的相同。
         */
//        $result = in_array('1',$this->crr,true);
//        var_dump($result);
        /**
         *  mixed array_search( mixed $needle, array $haystack[, bool $strict = false] )
         *      如果找到了 needle 则返回它的键，否则返回 FALSE。
         *      如果 needle 在 haystack 中出现不止一次，则返回第一个匹配的键。要返回所有匹配值的键，应该用 array_keys() 加上可选参数 search_value来代替。
         */
//        $result = array_search("1",$this->crr,true);
//        $result = array_keys($this->crr,1); //这样才会返回这个1的所有key的数组,所以说如果要判断某个值存不存在这个数组中，有两个方法
//        var_dump($result);


















    }
}