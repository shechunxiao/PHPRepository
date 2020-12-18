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
        'test.txt' => ['one' => 'test.txt/one'],
    ];
    protected $crr = [1, 2, 3, 4, 5, 1];
    protected $drr = ['one','two','three','four','five'];


    /**
     * 总的有哪些
     *          1.array_values
     *          2.array_keys
     *          3.array_flip
     *          4.in_array
     *          5.array_search
     *          6.array_key_exists
     *          7.isset
     *          8.compact
     *          9.extract
     *          10.array_slice
     *          11.array_splice
     *          12.array_chunk
     *          13.array_pad
     *          14.push
     *          15.pop
     *          16.array_unshift
     *          17.array_shift
     *          18.array_walk
     *          19.array_map
     *          20.array_filter
     *          21.array_reduce
     *          22.sort
     *          23.rsort
     *          24.asort
     *          25.arsort
     *          26.ksort
     *          27.krsort
     *          28.natsort
     *          29.array_column
     *          30.array_sum
     *          31.array_merge
     *          32.array_merge_recursive
     *          33.array_diff
     *          34.array_intersect
     *          35.current
     *          36.pos
     *          37.key
     *          38.prev
     *          39.next
     *          40.end
     *          41.reset
     *          42.each
     *          43.list
     *          44.array_unique
     *          45.array_reverse
     *          46.shuffle
     *          47.range |
     *          48.array_rand
     *          49.array_change_key_case
     *          50.array_combine
     *          51.array_count_values
     *          52.array_diff_assoc
     *          53.array_diff_key
     *          54.array_diff
     *          55.array_fill
     *          56.array_fill_keys |
     *          57.array_flip
     *          58.array_intersect_key
     *          59.array_intersect_assoc
     *          60.array_replace
     *          61.array_replace_recursive
     *
     *          手册一共是79
     *
     *          未研究的
     *          1.array_diff_uassoc
     *          2.array_diff_ukey
     *          3.array_intersect_uassoc
     *          4.array_intersect_ukey
     *          5.array_multisort
     *          6.array_product
     *          7.array_udiff_assoc
     *          8.array_udiff_uassoc
     *          9.array_udiff
     *          10.array_uintersect_assoc
     *          11.array_uintersect_uassoc
     *          12.array_uintersect
     *          13.array_walk_recursive
     *          13.count
     *          14.natcasesort
     *          15.sizeof
     *          16.uasort
     *          17.uksort
     *          18.usort
     *
     */

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
//        $this->computed();
//        $this->diffAndIntersect();
//        $this->pointer();
//        $this->other();
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
     *      5.array_fill
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
        /**
         *  array array_pad( array $input, int $pad_size, mixed $pad_value)
         *      array_pad() 返回 input 的一个拷贝，并用 pad_value 将其填补到 pad_size 指定的长度。如果 pad_size 为正，则填补到数组的右侧，如果为负则从左侧开始填补。
         *      如果 pad_size 的绝对值小于或等于 input 数组的长度则没有任何填补。
         */
//        $a = [1,2,3,4];
//        $result =array_pad($a,-9,'张三');
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
     *      对原数组修改的深度 array_filter(过滤,return true则保留，否则删除)->array_walk(引用修改值,use引用)->array_map(遍历数组，自定义返回值，和其他数组配合);
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
         *  重点
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
     * 需要取出数组列的多维数组（或结果集）
     * column_key
     * 需要返回值的列，它可以是索引数组的列索引，或者是关联数组的列的键。也可以是NULL，此时将返回整个数组（配合index_key参数来重置数组键的时候，非常管用）
     * index_key
     * 作为返回数组的索引/键的列，它可以是该列的整数索引，或者字符串键值。
     *  //使用方法二，可以组成key=》value的值，也就是说可以实现某个二维数组中某两个值组成一个键一个值得搭配column
     */
    public function column()
    {
//        $a = [
//            [
//                'id'=>1,
//                'name'=>'first'
//            ],
//            [
//                'id'=>2,
//                'name'=>'second'
//            ]
//        ];
//        $arr = array_column($a,null,'name');
//        $arr = array_column($a,'name','id');
//        var_dump($arr);
    }

    /**
     * 数组的计算
     *      总列:
     *          array_sum
     *          array_merge
     *          array_merge_recursive
     */
    public function computed()
    {
        /**
         *  number array_sum( array $array)
         *      array_sum() 将数组中的所有值的和以整数或浮点数的结果返回。
         */
//        $result = array_sum($this->arr);
//        var_dump($result);
        /**
         *  array array_merge( array $array1[, array $...] )
         *  array_merge() 将一个或多个数组的单元合并起来，一个数组中的值附加在前一个数组的后面。返回作为结果的数组。
         * 如果输入的数组中有相同的字符串键名，则该键名后面的值将覆盖前一个值。然而，如果数组包含数字键名，后面的值将不会覆盖原来的值，而是附加到后面。
         * 如果只给了一个数组并且该数组是数字索引的，则键名会以连续方式重新索引。
         */
//        $result = array_merge($this->arr,$this->brr,$this->crr); //覆盖和数字索引不会覆盖
//        $result = array_merge($this->arr); //只给一个数组，那么键名会重新索引,适用于数字索引重新排序，和array_values有相同功能
//        var_dump($result);
        /**
         *  array array_merge_recursive( array $array1[, array $...] )
         *      array_merge_recursive() 将一个或多个数组的单元合并起来，一个数组中的值附加在前一个数组的后面。返回作为结果的数组。
         *      如果输入的数组中有相同的字符串键名，则这些值会被合并到一个数组中去，这将递归下去，因此如果一个值本身是一个数组，
         *        本函数将按照相应的条目把它合并为另一个数组。然而，如果数组具有相同的数组键名，后一个值将不会覆盖原来的值，
         *           而是附加到后面。
         */
//        $result = array_merge_recursive($this->arr,$this->brr); //相同的字符串键名会合并到一个数组，但是不会递归合并，也就是说深度为一维
//        var_dump($result);
//        $ar1 = array("color" => array("favorite" => "red"), 5);
//        $ar2 = array(10, "color" => array("favorite" => "green", "blue"));
//        $result = array_merge_recursive($ar1, $ar2);
//        print_r($result);

    }

    /**
     * 差集和交集
     *  总列:
     *      array_diff
     *      array_intersect
     */
    public function diffAndIntersect()
    {
        /**
         *  典型的 A-B的集合(A中存在，B中不存在)
         *  //该函数有一个限制，就是数组中的项只能是字符串或者数字
         *  array array_diff( array $array1, array $array2[, array $...] )
         *      对比返回在 array1 中但是不在 array2 及任何其它参数数组中的值。
         */
//        $a = [1,2,3,4,5,6,7,'sss'];
//        $b = [2,4,6];
//        $result = array_diff($a,$b);
//        var_dump($result);
        /**
         *  典型的A，B中同时存在
         *  array array_intersect( array $array1, array $array2[, array $ ...] ) //计算数组的交集
         *      array_intersect() 返回一个数组，该数组包含了所有在 array1 中也同时出现在所有其它参数数组中的值。注意键名保留不变。
         */
//        $a = [1,2,3,4,5];
//        $b = [3,5];
//        $c = [5];
//        $result = array_intersect($a,$b,$c);
//        var_dump($result);
    }

    /**
     * 数组内部指针操作
     *  总列:
     *      1.current
     *      2.pos (current的别名)
     *      3.key
     *      4.prev
     *      5.next
     *      6.end
     *      7.reset
     *      8.each
     *      9.list
     */
    public function pointer()
    {
        /**
         *  current
         *      mixed current( array &$array)
         *      每个数组中都有一个内部的指针指向它"当前的"单元，初始指向插入到数组中的第一个单元。
         */
//        $result = current($this->arr); //返回当前的元素值
//        var_dump($result);
        /**
         *  mixed key( array &$array)
         *      key() 返回数组中当前单元的键名。
         *      key() 函数返回数组中内部指针指向的当前单元的键名。但它不会移动指针。如果内部指针超过了元素列表尾部，或者数组是空的，key() 会返回 NULL。
         */
//        $result = key($this->arr);
//        var_dump($result);
        /**
         *  mixed next( array &$array) //也就是说，将指针后移一位，并返回当前指针的值
         *      next() 和 current() 的行为类似，只有一点区别，在返回值之前将内部指针向前移动一位。这意味着它返回的是下一个数组单元的值并将数组指针向前移动了一位。
         */
//        $result = next($this->arr);
//        var_dump($result);
        /**
         *  mixed prev( array &$array)
         *      prev() 和 next() 的行为类似，只除了它将内部指针倒回一位而不是前移一位。
         *      返回数组内部指针指向的前一个单元的值，或当没有更多单元时返回 FALSE。
         */
//        $result = prev($this->arr);
//        var_dump($result);
        /**
         *  mixed end( array &$array)
         *      end() 将 array 的内部指针移动到最后一个单元并返回其值。
         *      返回最后一个元素的值，或者如果是空数组则返回 FALSE。
         */
//        $result = end($this->arr);
//        var_dump($result);
        /**
         *  mixed reset( array &$array)
         *      reset() 将 array 的内部指针倒回到第一个单元并返回第一个数组单元的值。
         *      返回数组第一个单元的值，如果数组为空则返回 FALSE。
         */
//        $result = reset($this->arr);
//        var_dump($result);
        /**
         *  array each( array &$array)
         *      返回数组中当前的键／值对并将数组指针向前移动一步
         *      在执行 each() 之后，数组指针将停留在数组中的下一个单元或者当碰到数组结尾时停留在最后一个单元。
         */
//        $result = each($this->arr);
//        var_dump($result);
        /**
         *  array list( mixed $varname[, mixed $...] )
         *      把数组中的值赋给一些变量
         */
//        list($a,$b) = [1,2];
//        var_dump($a);
//        var_dump($b);
    }

    /**
     * 其他数组
     */
    public function other(){
        /**
         *  //需要注意的是这个函数，必须单一的值不能是数组
         *  array array_unique( array $array[, int $sort_flags = SORT_STRING] )
         *      array_unique() 接受 array 作为输入并返回没有重复值的新数组。
         *      注意键名保留不变。array_unique() 先将值作为字符串排序，然后对每个值只保留第一个遇到的键名，接着忽略所有后面的键名。
         *      这并不意味着在未排序的 array 中同一个值的第一个出现的键名会被保留。
         */
//        $a = [1,2,34,3,2,3,1];
//        $result = array_unique($a);
//        var_dump($result);
        /**
         *  array array_reverse( array $array[, bool $preserve_keys = false] )
         *      array_reverse() 接受数组 array 作为输入并返回一个单元为相反顺序的新数组。
         *      preserve_keys
                    如果设置为 TRUE 会保留数字的键。非数字的键则不受这个设置的影响，总是会被保留。
         */
//        $result = array_reverse($this->arr,true); //如果加true那么会保留原来的索引
//        var_dump($result);
        /**
         *  //索引会重新从0开始
         *  bool shuffle( array &$array)
         *      本函数打乱（随机排列单元的顺序）一个数组。
         */
//        $result = shuffle($this->arr);
//        var_dump($result);
//        var_dump($this->arr);
        /**
         *  array range( mixed $start, mixed $limit[, number $step = 1] )
         *      建立一个包含指定范围单元的数组。
         *      返回的数组中从 start 到 limit 的单元，包括它们本身。
         */
//        $result = range(1,10,3); //step为步数
//        var_dump($result);
        /**
         *  //这个返回的是随机的键
         *  mixed array_rand( array $input[, int $num_req = 1] )
         *      从数组中取出一个或多个随机的单元，并返回随机条目的一个或多个键。
         *      num_req
                    指明了你想取出多少个单元。如果指定的数目超过了数组里的数量将会产生一个 E_WARNING 级别的错误。
         */
//        $result = array_rand($this->drr,1);
//        var_dump($result);
        /**
         *  array array_change_key_case( array $input[, int $case = CASE_LOWER] )
         *      array_change_key_case() 将 input 数组中的所有键名改为全小写或大写。改变是根据后一个选项 case 参数来进行的。本函数不改变数字索引。
         *      返回一个键全是小写或者全是大写的数组；如果输入值（input）不是一个数组，那么返回FALSE
         *      case
                    可以在这里用两个常量，CASE_UPPER 或 CASE_LOWER（默认值）。
         */
//        $result = array_change_key_case($this->arr,CASE_UPPER);
//        var_dump($result);
        /**
         *  array array_combine( array $keys, array $values)
         *      创建一个数组，用一个数组的值作为其键名，另一个数组的值作为其值
         *      keys
                    将被作为新数组的键。非法的值将会被转换为字符串类型（string）。
         *      values
                    将被作为数组的值。
         */
//        $a = [1,2,3,4,null,null];
//        $b = ['one','two','three','four','five','six'];
//        $result = array_combine($a,$b);
//        var_dump($result);
        /**
         *  该函数的局限性是只能用于字符串或者数字的数组
         *  array array_count_values( array $input)
         *      返回一个关联数组，用 input 数组中的值作为键名，该值在数组中出现的次数作为值。
         */
//        $result = array_count_values($this->crr);
//        var_dump($result);
        /**
         *  该函数的用法是，key和value都不相同的情况下，才是A存在，B不存在，才返回
         *  array array_diff_assoc( array $array1, array $array2[, array $...] )
         *      array_diff_assoc() 返回一个数组，该数组包括了所有在 array1 中但是不在任何其它参数数组中的值。注意和 array_diff() 不同的是键名也用于比较。
         *
         */
//        $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
//        $array2 = array("a" => "green", "yellow", "red");
//        $result = array_diff_assoc($array1,$array2);
//        var_dump($result);
        /**
         *  array array_diff_key( array $array1, array $array2[, array $...] )
         *      根据 array1 中的键名和 array2 进行比较，返回不同键名的项。本函数和 array_diff() 相同只除了比较是根据键名而不是值来进行的。
         */
//        $a = [1,2,3,4];
//        $b = ['one','two','three'];
//        $result = array_diff_key($a,$b);
//        var_dump($result);
        /**
         *  array_diff(比较值),array_diff_key(比较键),array_diff_assoc(比较键和值)
         */
        /**
         *  快速生成一个数组
         *  array array_fill( int $start_index, int $num, mixed $value)
         *      array_fill() 用 value 参数的值将一个数组填充 num 个条目，键名由 start_index 参数指定的开始。
         *      返回填充后的数组
         */
//        $result = array_fill(2,5,'张三');
//        var_dump($result);
        /**
         *  array array_fill_keys( array $keys, mixed $value)
         *      使用 value 参数的值作为值，使用 keys 数组的值作为键来填充一个数组。
         */
//        $Keys = ['one','two','three'];
//        $result = array_fill_keys($Keys,'中国');
//        var_dump($result);
        /**
         *  array array_flip( array $trans)
         *      array_flip() 返回一个反转后的 array，例如 trans 中的键名变成了值，而 trans 中的值成了键名。
         *      注意 trans 中的值需要能够作为合法的键名，例如需要是 integer 或者 string。如果值的类型不对将发出一个警告，并且有问题的键／值对将不会反转。
                如果同一个值出现了多次，则最后一个键名将作为它的值，所有其它的都丢失了。
         *      成功时返回交换后的数组，如果失败返回 NULL。
         */
//        $result = @array_flip($this->arr); //加@抑制错误的显示
//        var_dump($result);
        /**
         * 通过key比较，两个数组中的key相同的
         *  array array_intersect_key( array $array1, array $array2[, array $ ...] )
         *      array_intersect_key() 返回一个数组，该数组包含了所有出现在 array1 中并同时出现在所有其它参数数组中的键名的值。
         */
//        $a = [1,2,3,4];
//        $b = ['one','a'=>122,'two'];
//        $result = array_intersect_key($a,$b);
//        var_dump($result);
        /**
         *  array array_intersect_assoc( array $array1, array $array2[, array $ ...] )
         *  array_intersect_assoc() 返回一个数组，该数组包含了所有在 array1 中也同时出现在所有其它参数数组中的值。注意和 array_intersect() 不同的是键名也用于比较。
         */
//        $a = [1,2,3,4];
//        $b = ['one',2,'three','four'];
//        $result = array_intersect_assoc($a,$b);
//        var_dump($result);
        /**
         *  array array_replace( array $array1, array $array2[, array $...] )
         *      array_replace() 函数使用后面数组元素相同 key 的值替换 array1 数组的值。如果一个键存在于第一个数组同时也存在于第二个数组，它的值将被第二个数组中的值替换。如果一个键存在于第二个数组，但是不存在于第一个数组，则会在第一个数组中创建这个元素。如果一个键仅存在于第一个数组，它将保持不变。
         *      如果传递了多个替换数组，它们将被按顺序依次处理，后面的数组将覆盖之前的值。
         *      array_replace() 是非递归的：它将第一个数组的值进行替换而不管第二个数组中是什么类型。
         */
//        $a = [8=>1,2,3];
//        $b = [8=>'发发发',5,6,7,8];
//        $result = array_replace($a,$b);
//        var_dump($result);
        /**
         *  array array_replace_recursive( array $array1, array $array2[, array $...] )
         */
        //array_replace和array_replace_recursive的区别
//        $base = array('citrus' => array( "orange") , 'berries' => array("blackberry", "raspberry"), );
//        $replacements = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));
//
//        $basket = array_replace_recursive($base, $replacements);
//        print_r($basket);
//
//        $basket = array_replace($base, $replacements);
//        print_r($basket);

    }





}
