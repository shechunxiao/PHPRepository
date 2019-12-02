<?php

namespace app\manual;

use app\interfaces\Base;
use Closure;

class ArrayStudy implements Base
{

    protected $arr = [
        8 => 124,
        'one' => '第一',
        'two' => '第二',
        'three' => '第三',
        'four' => '第四',
        'five' => ['five_1', 'five_2', 'five_3', '第一'],
        'six' => true,
        4 => 567,
    ];
    protected $brr = [
        'one' => '第一',
        'two' => 1,
        'three' => [],
        'four' => '第一',
    ];
    protected $crr = [1, 2, 3, 4, 5, 1];
    protected $drr = [];

    /**
     * 数组的研究
     */
    public function index()
    {
//        $this->keyAndValue();
//        $this->arrayAndVar();
//        $this->spliceAndPad();
//        $this->pushAndPop();
//        $this->shiftAndUnshift();
//        $this->callableFunction();
//        $this->sortFunction();
//        $this->column();
    }

    /**
     * 数组的键名和值
     *     总列:
     *          1.array_values
     *          2.array_keys
     *          3.array_flip
     *          4.in_array
     *          5.array_search
     *          6.array_key_exists
     *          7.isset
     *      获取key array_keys,array_search
     *      检查key array_key_exists
     *      获取value array_values
     */
    public function keyAndValue()
    {
        /**
         * array array_values( array $input)
         * 返回 input 数组中所有的值并给其建立数字索引(深度为一维)
         */
//        $result = array_values($this->arr);
//        var_dump($result);
        /**
         * array array_keys( array $array[, mixed $search_value[, bool $strict = false]] )
         * array_keys() 返回 input 数组中的数字或者字符串的键名。
         * 如果指定了可选参数 search_value，则只返回该值的键名。否则 input 数组中的所有键名都会被返回。(深度为一维)
         *  input
         * 一个数组，包含了要返回的键。
         * search_value
         * 如果指定了这个参数，只有包含这些值的键才会返回。
         * strict
         * 判断在搜索的时候是否该使用严格的比较（===)
         */
//        $result = array_keys($this->arr,'第一');
//        var_dump($result);
        /**
         *  array array_flip( array $trans)
         *  array_flip() 返回一个反转后的 array，例如 trans 中的键名变成了值，而 trans 中的值成了键名。
         * 注意 trans 中的值需要能够作为合法的键名，例如需要是 integer 或者 string。如果值的类型不对将发出一个警告，并且有问题的键／值对将不会反转。
         * 如果同一个值出现了多次，则最后一个键名将作为它的值，所有其它的都丢失了。
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
//        $result = array_keys($this->crr,1); //这样才会返回这个1的所有key的数组,所以说如果要判断某个值是不是在这个数组中并且获取它的键，有两个方法
//        var_dump($result);
        /**
         *  bool array_key_exists( mixed $key, array $search)
         *      成功时返回 TRUE， 或者在失败时返回 FALSE。
         */
//        $result = array_key_exists(6,$this->crr);
//        var_dump($result);
        /**
         *  bool isset( mixed $var[, mixed $...] )
         *      如果 var 存在并且值不是 NULL 则返回 TRUE，否则返回 FALSE。
         */
//        $result = isset($this->crr[0],$this->crr[1],$this->crr[2]); //这个函数可以判断多个变量是否存在，如果都存在则返回true，否则返回false
//        var_dump($result);
    }

    /**
     * 数组和变量之间的转换
     *  总列:
     *      1.compact
     *      2.extract
     *
     */
    public function arrayAndVar()
    {
        /**
         *  array compact( mixed $varname[, mixed $...] )
         *  创建一个包含变量与其值的数组。
         *  对每个参数，compact() 在当前的符号表中查找该变量名并将它添加到输出的数组中，变量名成为键名而变量的内容成为该键的值。简单说，它做的事和 extract() 正好相反。返回将所有变量添加进去后的数组。
         */
//        $a = 1;
//        $b = 2;
//        $c = 3;
//        $d = true;
//        $arr = compact('a','b','c','d');
//        var_dump($arr);
        /**
         * int extract( array &$var_array[, int $extract_type = EXTR_OVERWRITE[, string $prefix = NULL]] )
         *  本函数用来将变量从数组中导入到当前的符号表中
         *  var_array
         * 一个关联数组。此函数会将键名当作变量名，值作为变量的值。对每个键／值对都会在当前的符号表中建立变量，并受到 extract_type 和 prefix 参数的影响。
         * 必须使用关联数组，数字索引的数组将不会产生结果，除非用了 EXTR_PREFIX_ALL 或者 EXTR_PREFIX_INVALID。
         *  extract_type
         * 对待非法／数字和冲突的键名的方法将根据 extract_type 参数决定。可以是以下值之一：
         * EXTR_OVERWRITE如果有冲突，覆盖已有的变量。
         *      EXTR_SKIP如果有冲突，不覆盖已有的变量。
         *      EXTR_PREFIX_SAME如果有冲突，在变量名前加上前缀 prefix。
         *      EXTR_PREFIX_ALL给所有变量名加上前缀 prefix。
         *      EXTR_PREFIX_INVALID仅在非法／数字的变量名前加上前缀 prefix。
         *      EXTR_IF_EXISTS仅在当前符号表中已有同名变量时，覆盖它们的值。其它的都不处理。举个例子，以下情况非常有用：定义一些有效变量，然后从 $_REQUEST 中仅导入这些已定义的变量。
         *      EXTR_PREFIX_IF_EXISTS仅在当前符号表中已有同名变量时，建立附加了前缀的变量名，其它的都不处理。
         *      EXTR_REFS将变量作为引用提取。这有力地表明了导入的变量仍然引用了 var_array 参数的值。可以单独使用这个标志或者在 extract_type 中用 OR 与其它任何标志结合使用。
         * 如果没有指定 extract_type，则被假定为 EXTR_OVERWRITE。
         * prefix
         * 注意 prefix 仅在 extract_type 的值是 EXTR_PREFIX_SAME，EXTR_PREFIX_ALL，EXTR_PREFIX_INVALID 或 EXTR_PREFIX_IF_EXISTS 时需要。如果附加了前缀后的结果不是合法的变量名，将不会导入到符号表中。前缀和数组键名之间会自动加上一个下划线。
         */
//        extract($this->arr);
//        extract($this->arr,EXTR_PREFIX_ALL,'p'); //这里加了前缀p
//        var_dump($p_one); //因为extract导入进来的变量没有提前定义，所以编辑器会报红线错误。
    }

    /**
     * 数组的分段和填充
     *    总列:
     *      1.array_slice
     *      2.array_splice
     *      3.array_chunk
     *      4.array_pad
     */
    public function spliceAndPad()
    {
        /**
         *  array array_slice( array $array, int $offset[, int $length = NULL[, bool $preserve_keys = false]] )
         * array
         * 输入的数组。
         * offset
         * 如果 offset 非负，则序列将从 array 中的此偏移量开始。如果 offset 为负，则序列将从 array 中距离末端这么远的地方开始。
         * length
         * 如果给出了 length 并且为正，则序列中将具有这么多的单元。如果给出了 length 并且为负，则序列将终止在距离数组末端这么远的地方。如果省略，则序列将从 offset 开始一直到 array 的末端。-1的话就是下标从后面开始数-1
         * preserve_keys
         * 注意 array_slice() 默认会重新排序并重置数组的数字索引。你可以通过将 preserve_keys 设为 TRUE 来改变此行为。
         */
//        $result = array_slice($this->arr,0,2);
//        $result = array_slice($this->arr,2,3);
//        $result = array_slice($this->arr,0,-1);
//        $result = array_slice($this->arr,0,-5);
//        $result = array_slice($this->arr,-6,-1);
//        $result = array_slice($this->arr,0,8,false);
//        var_dump($result);
        /**
         *  array array_splice( array &$input, int $offset[, int $length = 0[, mixed $replacement]] )
         *  返回一个包含有被移除单元的数组。
         *  参数:
         *      input
         * 输入的数组。
         * offset
         * 如果 offset 为正，则从 input 数组中该值指定的偏移量开始移除。如果 offset 为负，则从 input 末尾倒数该值指定的偏移量开始移除。
         * length
         * 如果省略 length，则移除数组中从 offset 到结尾的所有部分。如果指定了 length 并且为正值，则移除这么多单元。如果指定了 length 并且为负值，则移除从 offset 到数组末尾倒数 length 为止中间所有的单元。小窍门：当给出了 replacement 时要移除从 offset 到数组末尾所有单元时，用 count($input) 作为 length。
         * replacement
         * 如果给出了 replacement 数组，则被移除的单元被此数组中的单元替代。
         * 如果 offset 和 length 的组合结果是不会移除任何值，则 replacement 数组中的单元将被插入到 offset 指定的位置。 注意替换数组中的键名不保留。
         * 如果用来替换 replacement 只有一个单元，那么不需要给它加上 array()，除非该单元本身就是一个数组、一个对象或者 NULL。
         */
//        $result = array_splice($this->brr,0,1);
//        $result = array_splice($this->brr,0,1,'替代了');
//        var_dump($result);
//        var_dump($this->brr);
        /**
         *  array array_chunk( array $input, int $size[, bool $preserve_keys = false] )
         *      将一个数组分割成多个数组，其中每个数组的单元数目由 size 决定。最后一个数组的单元数目可能会少于 size 个。
         */
//        $result = array_chunk($this->crr,2,true);
//        var_dump($result);
    }

    /**
     * 数组与栈
     *  总列:
     *      push
     *      pop
     */
    public function pushAndPop()
    {
        /**
         *  int array_push( array &$array, mixed $var[, mixed $...] )
         *  array_push() 将 array 当成一个栈，并将传入的变量压入 array 的末尾。array 的长度将根据入栈变量的数目增加
         */
//        $result = array_push($this->crr,10,11,12,13);
//        var_dump($result);
//        var_dump($this->crr);
        /**
         *  mixed array_pop( array &$array)
         *  array_pop() 弹出并返回 array 数组的最后一个单元，并将数组 array 的长度减一。如果 array 为空（或者不是数组）将返回 NULL。
         */
//        $result = array_pop($this->crr);
//        var_dump($result);
//        var_dump($this->crr);
    }

    /**
     * 数组和队列
     *  总列:
     *      array_unshift
     *      array_shift
     */
    public function shiftAndUnshift()
    {
        /**
         *  int array_unshift( array &$array, mixed $var[, mixed $...] )
         *      返回 array 数组新的单元数目。
         *      array_unshift() 将传入的单元插入到 array 数组的开头。注意单元是作为整体被插入的，因此传入单元将保持同样的顺序。所有的数值键名将修改为从零开始重新计数，所有的文字键名保持不变。
         */
//        $result = array_unshift($this->crr,null,10,11,12,13);
//        var_dump($result);
//        var_dump($this->crr);
        /**
         *  mixed array_shift( array &$array)
         *   返回移出的值，如果 array 为 空或不是一个数组则返回 NULL
         */
//        $result = array_shift($this->crr);
//        var_dump($result);
//        var_dump($this->crr);
    }

    /**
     *  回调函数
     *      总列:
     *          1.array_walk
     *          2.array_map
     *          2.array_filter
     *          2.array_reduce
     */
    public function callableFunction()
    {
        /**
         *  bool array_walk( array &$array, callable $funcname[, mixed $userdata = NULL] )
         *      将用户自定义函数 funcname 应用到 array 数组中的每个单元。
         *      array_walk() 不会受到 array 内部数组指针的影响。array_walk() 会遍历整个数组而不管指针的位置。
         * @param $one
         * @param $two
         */

//        $result = array_walk($this->crr, [$this,'selfCallable'],['one'=>2,'two'=>4]);
//        var_dump($result);
//        var_dump($this->crr);
        /**
         *  array array_map( callable $callback, array $arr1[, array $...] )
         *  array_map() 返回一个数组，该数组包含了 arr1 中的所有单元经过 callback 作用过之后的单元。callback 接受的参数数目应该和传递给 array_map() 函数的数组数目一致。
         *  callback
         * 对每个数组的每个元素作用的回调函数。
         * arr1
         * 将被回调函数（callback）执行的数组。
         * array
         * 将被回调函数（callback）执行的数组列表。
         */
//        $result = array_map(function($item){
//            return $item.'/self';
//        },$this->crr);
//        $a = [1,2,3];
//        $b = [1,2,3,4];
//        $c = ["332","23432",2,3,4];
//        $result = array_map(function($item1,$item2){
//            if ($item1 == $item2){
//                return $item1;
//            }
//        },$a,$b);
        /**
         * 重点
         *  这个方法的特别用法可以将两个数组合并成一个，一一合并
         *
         *
         */
//        $result = array_map(null,$a,$b,$c);
//        var_dump($result);
        /**
         * array array_filter( array $array[, callable $callback[, int $flag = 0]] )
         *      input
         * 要循环的数组
         * callback
         * 使用的回调函数
         * 如果没有提供 callback 函数，将删除 input 中所有等值为 FALSE 的条目。更多信息见转换为布尔值。
         * flag
         * 决定callback接收的参数形式:
         * ◦ ARRAY_FILTER_USE_KEY - callback接受键名作为的唯一参数
         * ◦ ARRAY_FILTER_USE_BOTH - callback同时接受键名和键值
         *
         * 返回过滤后的数组。
         */
//        $result = array_filter($this->crr,function($item,$key){
//            echo $item;
//            echo $key;
//            if ($item>3){
//                return true;
//            }
//            return false;
//        },1);
//        var_dump($result);
        /**
         *  mixed array_reduce( array $input, callable $function[, mixed $initial = NULL] )
         *  array_reduce() 将回调函数 function 迭代地作用到 input 数组中的每一个单元中，从而将数组简化为单一的值。
         *  input
         * The input array.
         * function
         * The callback function.
         *
         * mixed callback( mixed &$result, mixed $item)
         * initial
         * 如果指定了可选参数 initial，该参数将被当成是数组中的第一个值来处理，或者如果数组为空的话就作为最终返回值。
         */
//        $result = array_reduce($this->crr,function($v,$w){
//            return $v *= $w;
//        },2);
//        var_dump($result);

    }

    /**
     * @param $value (数组的值)
     * @param $key (数组的键)
     * @param $data (用户传递的数据,其实在当前文件下可以不传)
     * @return void
     */
    public function selfCallable(&$value, $key, $data)
    {
        if ($value > $data['one'] && $value < $data['two']) {
            $value = '中间值';
        }
    }

    /**
     * 数组排序
     *
     */
    public function sortFunction()
    {
        /**
         * 按照值进行排序
         */
//        sort($this->crr,SORT_NUMERIC);
//        rsort($this->crr);
//        asort($this->crr);
//        arsort($this->crr);
//        var_dump($this->crr);
        /**
         * 按照键进行排序
         */
//        ksort($this->crr);
//        krsort($this->crr);
//        natsort($this->crr);
//        var_dump($this->crr);
    }

    /**
     *  //使用方法一
     *  重构数组的key值,这里的需求是将一个二维数组中的某一个字段指定为对应的key（键）
     *  array array_column( array $input, mixed $column_key[, mixed $index_key])
     *  array_column() 返回input数组中键值为column_key的列，如果指定了可选参数index_key，那么input数组中的这一列的值将作为返回数组中对应值的键。
         *  input
                需要取出数组列的多维数组（或结果集）
            column_key
                需要返回值的列，它可以是索引数组的列索引，或者是关联数组的列的键。也可以是NULL，此时将返回整个数组（配合index_key参数来重置数组键的时候，非常管用）
            index_key
                作为返回数组的索引/键的列，它可以是该列的整数索引，或者字符串键值。
     *  //使用方法二，可以组成key=》value的值，也就是说可以实现某个二维数组中某两个值组成一个键一个值得搭配column
     */
    public function column(){
        $a = [
            [
                'id'=>1,
                'name'=>'first'
            ],
            [
                'id'=>2,
                'name'=>'second'
            ]
        ];
        $arr = array_column($a,'name','id');
        var_dump($arr);
    }


}