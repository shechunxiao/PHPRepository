<?php

namespace app\manual;

/**
 * 数组研究
 * Class NewArray
 * @package app\manual
 */
class NewArray
{
    // 是否存在
    private $key_value_exist = [];
    // 数字索引
    private $key_value_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    // 关联索引
    private $key_value_array_assoc = ['name' => '张三', 'age' => 18, 'email' => 'google@qq.com', 'address' => '山东省济南市', 'number' => 1];

    public function index()
    {
//        $this->key_value(); //7
//        $this->array_var(); // 2
//        $this->frag_fit(); // 7
//        $this->push_pop(); // 2
//        $this->shift_unshift(); // 2
        $this->call_fun(); // 5
        $this->sort_fun(); // 12
//        $this->column_fun(); // 1
        $this->calculate_fun(); // 6
        $this->diff_intersect();
//        $this->pointer_fun(); // 8
        $this->other(); // 8
        // 除了交集和差集 一共60
    }

    /**
     * 键名和键值
     * isset — 检测变量是否设置
     * in_array — 检查数组中是否存在某个值,设置strict则同时检查类型
     * array_values — 返回数组中所有的值，并建立数字索引
     * array_key_exists — 检查给定的键名或索引是否存在于数组中
     * array_keys — 返回数组中部分的或所有的键名,设置strict则同时检查类型
     * array_search — 在数组中搜索给定的值，如果成功则返回相应的键名
     * array_flip — 交换数组中的键和值
     */
    public function key_value()
    {
        /**
         * isset — 检测变量是否设置
         * bool isset( mixed $var[, mixed $...] )
         * 如果传多个参数，则多个变量都存在时才返回true
         * 返回值 如果var存在并且值不是 NULL 则返回 TRUE，否则返回 FALSE。
         * 需要注意的是一个 NULL 字节（"\0"）并不等同于 PHP 的 NULL 常数。
         */
        $result = isset($this->key_value_array, $this->key_value_exist);
//        var_dump($result); // 结果 bool(true)
        /**
         * in_array — 检查数组中是否存在某个值
         * bool in_array( mixed $needle, array $haystack[, bool $strict = FALSE] )
         * needle 待搜索的值  Note:如果 needle 是字符串，则比较是区分大小写的。
         * haystack 要搜索的数组
         * strict 如果第三个参数 strict 的值为 TRUE 则 in_array() 函数还会检查 needle 的类型是否和 haystack 中的相同。
         * 返回值 如果找到 needle 则返回 TRUE，否则返回 FALSE。
         */
        $result = in_array('1', $this->key_value_array);
//        var_dump($result); // 结果 bool(true)
        $result = in_array('1', $this->key_value_array, true);
//        var_dump($result); // 结果 bool(false)
        /**
         * array_values — 返回数组中所有的值，并建立数字索引
         * array array_values( array $input)
         * 返回 input 数组中所有的值并给其建立数字索引。
         */
        $result = array_values($this->key_value_array_assoc);
//        print_r($result); // 结果 Array ( [0] => 张三 [1] => 18 [2] => google@qq.com [3] => 山东省济南市 [4] => 1 )
        /**
         * array_key_exists — 检查给定的键名或索引是否存在于数组中
         * bool array_key_exists( mixed $key, array $search)
         * key 要检查的键
         * search 一个数组，包含待检查的键
         * 返回值 在给定的 key 存在于数组中时返回 TRUE。key可以是任何能作为数组索引的值。array_key_exists()也可用于对象
         */
        $result = array_key_exists('name', $this->key_value_array_assoc);
//        var_dump($result); // 结果 bool(false)
        /**
         * array_keys — 返回数组中部分的或所有的键名
         * array array_keys( array $array[, mixed $search_value[, bool $strict = false]] )
         * array 要搜索的数组
         * search_value 如果指定了这个参数，只有包含这些值的键才会返回。
         * strict 判断在搜索的时候是否该使用严格的比较（===）。包括了值和类型检查
         * 返回 input 里的所有键组成的数组。
         */
        $result = array_keys($this->key_value_array_assoc);
//        var_dump($result); // 结果 array(5) { [0]=> string(4) "name" [1]=> string(3) "age" [2]=> string(5) "email" [3]=> string(7) "address" [4]=> string(6) "number" }
        $result = array_keys($this->key_value_array_assoc, '张三');
//        var_dump($result); // 结果 array(1) { [0]=> string(4) "name" }
        $result = array_keys($this->key_value_array_assoc, '1');
//        var_dump($result); // 结果 array(1) { [0]=> string(6) "number" }
        $result = array_keys($this->key_value_array_assoc, '1', true);
//        var_dump($result); // 结果 array(0) { }
        $result = array_keys($this->key_value_array_assoc, '测试没有对应的key,这里可以作为判断用');
//        var_dump($result); // 结果 array(0) { }
        $result = array_keys($this->key_value_array, 2); // 数字数组
//        var_dump($result); // 结果 array(1) { [0]=> int(1) }
        /**
         * array_search — 在数组中搜索给定的值，如果成功则返回相应的键名
         * mixed array_search( mixed $needle, array $haystack[, bool $strict = false] )
         * needle搜索的值。Note:如果 needle是字符串，则比较以区分大小写的方式进行。
         * haystack这个数组
         * strict 如果可选的第三个参数 strict 为 TRUE，则 array_search() 将在 haystack 中检查完全相同的元素。
         * 这意味着同样检查 haystack 里 needle 的 类型，并且对象需是同一个实例。
         * 返回值: 如果找到了 needle 则返回它的键，否则返回 FALSE。
         *      如果 needle 在 haystack 中出现不止一次，则返回第一个匹配的键。要返回所有匹配值的键，应该用 array_keys() 加上可选参数 search_value 来代替。
         *      应使用 === false 运算符来测试此函数的返回值
         */
        $result = array_search('张三', $this->key_value_array_assoc);
//        var_dump($result); // 结果 string(4) "name"
        $result = array_search('张三2', $this->key_value_array_assoc);
//        var_dump($result); // 结果 bool(false)
//        var_dump($result === false); // bool(true)
        /**
         * array_flip — 交换数组中的键和值
         * array array_flip( array $trans)
         * trans 要交换键/值对的数组。
         * 注意 trans 中的值需要能够作为合法的键名，例如需要是 integer 或者 string。
         * 如果值的类型不对将发出一个警告，并且有问题的键／值对将不会反转。
         * 如果同一个值出现了多次，则最后一个键名将作为它的值，所有其它的都丢失了。
         * array_flip(): Can only flip STRING and INTEGER values!(仅仅可以交换integer 或者 string类型的)
         */
        $result = array_flip($this->key_value_array_assoc);
        print_r($result);
    }


    /**
     * 数组和变量的转换
     * compact — 建立一个数组，包括变量名和它们的值
     * extract — 从数组中将变量导入到当前的符号表
     */
    public function array_var()
    {
        /**
         * compact — 建立一个数组，包括变量名和它们的值
         * array compact( mixed $varname[, mixed $...] )
         * 对每个参数，compact() 在当前的符号表中查找该变量名并将它添加到输出的数组中，变
         * 量名成为键名而变量的内容成为该键的值。简单说，它做的事和 extract() 正好相反。
         * 返回将所有变量添加进去后的数组。任何没有变量名与之对应的字符串都被略过。
         * varname compact() 接受可变的参数数目。
         * 每个参数可以是一个包括变量名的字符串或者是一个包含变量名的数组，
         * 该数组中还可以包含其它单元内容为变量名的数组，compact() 可以递归处理。
         */
        $first = '张三';
        $second = true;
        $three = 18;
        $four = null;
        $five = ['one' => 1, 'two' => 2, 'first' => 3];
        $result = compact('first', 'second', 'three', 'four', 'five');
//        print_r($result); // 结果 Array ( [first] => 张三 [second] => 1 [three] => 18 [four] => [five] => Array ( [one] => 1 [two] => 2 [first] => 3 ) )
        /**
         * extract — 从数组中将变量导入到当前的符号表
         * int extract( array &$var_array[, int $extract_type = EXTR_OVERWRITE[, string $prefix = NULL]] )
         * 本函数用来将变量从数组中导入到当前的符号表中。
         * 检查每个键名看是否可以作为一个合法的变量名，同时也检查和符号表中已有的变量名的冲突。
         * var_array
         *      一个关联数组 此函数会将键名当作变量名，值作为变量的值。对每个键／值对都会在当前的符号表中建立变量，并受到 extract_type 和 prefix 参数的影响。
         *      必须使用关联数组，数字索引的数组将不会产生结果，除非用了 EXTR_PREFIX_ALL 或者 EXTR_PREFIX_INVALID。
         * extract_type
         *      对待非法／数字和冲突的键名的方法将根据 extract_type 参数决定。
         *      EXTR_OVERWRITE如果有冲突，覆盖已有的变量。
         *      EXTR_SKIP如果有冲突，不覆盖已有的变量。
         *      EXTR_PREFIX_SAME如果有冲突，在变量名前加上前缀 prefix。
         *      EXTR_PREFIX_ALL给所有变量名加上前缀 prefix。
         *      EXTR_PREFIX_INVALID仅在非法／数字的变量名前加上前缀 prefix。
         *      EXTR_IF_EXISTS仅在当前符号表中已有同名变量时，覆盖它们的值。其它的都不处理。举个例子，以下情况非常有用：定义一些有效变量，然后从 $_REQUEST 中仅导入这些已定义的变量。
         *      EXTR_PREFIX_IF_EXISTS仅在当前符号表中已有同名变量时，建立附加了前缀的变量名，其它的都不处理。
         *      EXTR_REFS将变量作为引用提取。这有力地表明了导入的变量仍然引用了 var_array 参数的值。可以单独使用这个标志或者在 extract_type 中用 OR 与其它任何标志结合使用。
         *      如果没有指定 extract_type，则被假定为 EXTR_OVERWRITE。
         * prefix 注意prefix仅在 extract_type 的值是 EXTR_PREFIX_SAME，EXTR_PREFIX_ALL，EXTR_PREFIX_INVALID 或 EXTR_PREFIX_IF_EXISTS 时需要。
         *      如果附加了前缀后的结果不是合法的变量名，将不会导入到符号表中。前缀和数组键名之间会自动加上一个下划线。
         * 返回值: 返回成功导入到符号表中的变量数目。
         */
        $name = '是否覆盖？'; // 测试覆盖的参数

//        $extract_array = ['name' => '李四', 'age' => 18, 'email' => 'google@qq.com', 'sex' => 1, 'null' => 10];
//        $result = extract($extract_array); // 覆盖已有的变量
//        echo $result.'</br>'; // 5
//        echo $name.'</br>'; //李四
//        echo $age.'</br>'; //18
//        echo $email.'</br>'; //google@qq.com
//        echo $sex.'</br>'; //1
//        echo $null.'</br>'; //10

//        $extract_array = ['name' => '李四', 'age' => 18, 'email' => 'google@qq.com', 'sex' => 1, 'null' => 10];
//        $result = extract($extract_array,EXTR_SKIP); // 如果有冲突，不覆盖已有的变量。
//        echo $result.'</br>'; // 4
//        echo $name.'</br>'; //是否覆盖？
//        echo $age.'</br>'; //18
//        echo $email.'</br>'; //google@qq.com
//        echo $sex.'</br>'; //1
//        echo $null.'</br>'; //10

//        $extract_array = ['name' => '李四', 'age' => 18, 'email' => 'google@qq.com', 'sex' => 1, 'null' => 10];
//        $result = extract($extract_array,EXTR_PREFIX_SAME,'pre'); // 如果有冲突，在变量名前加上前缀pre
//        echo $result.'</br>'; // 5
//        echo $name.'</br>'; //是否覆盖？
//        echo $pre_name.'</br>'; //李四
//        echo $age.'</br>'; //18
//        echo $email.'</br>'; //google@qq.com
//        echo $sex.'</br>'; //1
//        echo $null.'</br>'; //10

//        $extract_array = ['name' => '李四', 'age' => 18, 'email' => 'google@qq.com', 'sex' => 1, 'null' => 10];
//        $result = extract($extract_array,EXTR_PREFIX_ALL,'pre'); // 给所有变量名加上前缀
//        echo $result.'</br>'; // 5
//        echo $pre_name.'</br>'; //李四
//        echo $pre_age.'</br>'; //18
//        echo $pre_email.'</br>'; //google@qq.com
//        echo $pre_sex.'</br>'; //1
//        echo $pre_null.'</br>'; //10

//        $extract_array = ['name' => '李四', 'age' => 18, 'email' => 'google@qq.com', 'sex' => 1, 'null' => 10, 0 => '这里是数字索引'];
//        $result = extract($extract_array, EXTR_PREFIX_INVALID, 'pre'); // 给所有变量名加上前缀
//        // 数字索引不合法，增加了pre前缀,如下面的变量$pre_0;
//        echo $result . '</br>'; // 5
//        echo $name . '</br>'; //李四
//        echo $age . '</br>'; //18
//        echo $email . '</br>'; //google@qq.com
//        echo $sex . '</br>'; //1
//        echo $null . '</br>'; //10
//        echo $pre_0 . '</br>'; //这里是数字索引

//        $extract_array = ['name' => '李四', 'age' => 18, 'email' => 'google@qq.com', 'sex' => 1, 'null' => 10];
//        $result = extract($extract_array,EXTR_IF_EXISTS); // 仅在当前符号表中已有同名变量时，覆盖它们的值。其它的都不处理。所以这里只处理了$name
//        echo $result.'</br>'; // 1
//        echo $name.'</br>'; //李四

//        $extract_array = ['name' => '李四', 'age' => 18, 'email' => 'google@qq.com', 'sex' => 1, 'null' => 10];
//        $result = extract($extract_array,EXTR_PREFIX_IF_EXISTS,'pre'); // 仅在当前符号表中已有同名变量时，建立附加了前缀的变量名，其它的都不处理。
//        // 也就是说，只有当前变量原来存在，那么就生成一个有前缀pre的新变量，其他的都不导入到符号表。
//        echo $result.'</br>'; // 1
//        echo $name.'</br>'; //是否覆盖？
//        echo $pre_name.'</br>'; //李四

//        $extract_array = ['name' => '李四', 'age' => 18, 'email' => 'google@qq.com', 'sex' => 1, 'null' => 10];
//        /**
//         * 添加了注释，phpstorm就会识别变量，也方便阅读
//         * @var string $name
//         * @var int $age
//         * @var string $email
//         * @var int $sex
//         * @var int $null
//         */
//        $result = extract($extract_array,EXTR_REFS); // 将变量作为引用提取
//        echo $result.'</br>'; // 5
//        echo $name.'</br>'; //李四
//        echo $age.'</br>'; //18
//        echo $email.'</br>'; //google@qq.com
//        echo $sex.'</br>'; //1
//        echo $null.'</br>'; //10
//        // 改变$email
//        $email = 'baidu@qq.com';
//        print_r($extract_array); // Array ( [name] => 李四 [age] => 18 [email] => baidu@qq.com [sex] => 1 [null] => 10 )
//        // 从上面看出，原来的数组中的email变量从google@qq.com变为了baidu@qq.com

    }


    /**
     * 片段和填充
     * array_chunk — 将一个数组分割成多个小数组，每个小数组的个数由size决定
     * array_slice — 从数组中取出一段(不会改变原数组)
     * array_splice — 把数组中的一部分去掉并用其它值取代(会改变原数组)
     * array_pad — 用值将数组填补到指定长度
     * array_fill — 用给定的值填充生成一个新数组
     * range — 建立一个包含指定范围单元的数组
     * array_fill_keys — 使用指定的键和值填充数组
     */
    public function frag_fit()
    {
        /**
         * array_chunk — 将一个数组分割成多个小数组，每个小数组的个数由size决定
         * array array_chunk( array $input, int $size[, bool $preserve_keys = false] )
         * 将一个数组分割成多个数组，其中每个数组的单元数目由size决定。最后一个数组的单元数目可能会少于size个。
         * input 需要操作的数组
         * size 每个数组的单元数目,整数且>=1
         * preserve_keys 设为 TRUE，可以使 PHP 保留输入数组中原来的键名。如果你指定了 FALSE，那每个结果数组将用从零开始的新数字索引。默认值是 FALSE。
         * 得到的数组是一个多维数组中的单元，其索引从零开始，每一维包含了 size 个元素。
         * 如果 size 小于 1，会抛出一个 E_WARNING 错误并返回 NULL。
         */
        $chunk_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $result = array_chunk($chunk_array, 3);
//        print_r($result); // 结果 Array ( [0] => Array ( [0] => 1 [1] => 2 [2] => 3 ) [1] => Array ( [0] => 4 [1] => 5 [2] => 6 ) [2] => Array ( [0] => 7 [1] => 8 [2] => 9 ) [3] => Array ( [0] => 10 ) )
        $result = array_chunk($chunk_array, 3, true); // 第三个参数，保持了原来的索引
//        print_r($result); // 结果 Array ( [0] => Array ( [0] => 1 [1] => 2 [2] => 3 ) [1] => Array ( [3] => 4 [4] => 5 [5] => 6 ) [2] => Array ( [6] => 7 [7] => 8 [8] => 9 ) [3] => Array ( [9] => 10 ) )

        /**
         * array_slice — 从数组中取出一段(不会改变原数组) slice 英 /slaɪs/ n. 薄片；部分；菜刀，火铲
         * array array_slice( array $array, int $offset[, int $length = NULL[, bool $preserve_keys = false]] )
         * array_slice() 返回根据 offset 和 length 参数所指定的 array 数组中的一段序列。
         * array 输入的数组
         * offset 如果 offset 非负，则序列将从 array 中的此偏移量开始。如果 offset 为负，则序列将从 array 中距离末端这么远的地方开始
         * length 如果给出了 length 并且为正，则序列中将具有这么多的单元。如果给出了 length 并且为负，则序列将终止在距离数组末端这么远的地方。如果省略，则序列将从 offset 开始一直到 array 的末端
         * preserve_keys 注意 array_slice() 默认会重新排序并重置数组的数字索引。你可以通过将 preserve_keys 设为 TRUE 来改变此行为。
         * 返回值：返回其中一段数组
         */
        $slice_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $result = array_slice($slice_array, 0, 2);
//        print_r($result); // 结果 Array ( [0] => 1 [1] => 2 )
        $result = array_slice($slice_array, 0, -1);
//        print_r($result); // 结果 Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 )  注意少了个10,说明length无论正负都是具体游标位置的绝对值
        $result = array_slice($slice_array, 0, null);
//        print_r($result); // 结果 Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 [9] => 10 ) 如果想截取到最后，不传或者传null即可
        $result = array_slice($slice_array, 4, 3);
//        print_r($result); // 结果 Array ( [0] => 5 [1] => 6 [2] => 7 )
        $result = array_slice($slice_array, 4, -2);
//        print_r($result); // 结果 Array ( [0] => 5 [1] => 6 [2] => 7 [3] => 8 )
        $result = array_slice($slice_array, 3, 2, true);
//        print_r($result); // 结果 Array ( [3] => 4 [4] => 5 ) 可以看出，索引保持了原来的状态
        // 总结：从上面可以看出，所有的offset和length都是移动游标的结果，比如，如果offset为2，那么头部游标从值为1的左侧移动到3和4之间，如果length为3，那么结尾游标从10的右侧移动到7和8之间
        // 下面分析开始游标和结束游标位置互换，也就是说结束游标在前，开始游标在后的情况
        $result = array_slice($slice_array, 6, -4, true);
//        print_r($result); // 结果 Array ( )
        // 从上面看出，如果出现了结束游标在前，开始游标在后的情况，则匹配不到相关的数据

        /**
         * array_splice — 把数组中的一部分去掉并用其它值取代 splice 英 /splaɪs/ v. 捻接（绳子）；拼接，接合（胶片等）；移接（基因）；使结婚 n. 接合处
         * array array_splice( array &$input, int $offset[, int $length = 0[, mixed $replacement]] )
         * 把 input 数组中由 offset 和 length 指定的单元去掉，如果提供了 replacement 参数，则用其中的单元取代。
         * 注意 input 中的数字键名不被保留。
         * input 输入的数组。
         * offset 如果 offset 为正，则从 input 数组中该值指定的偏移量开始移除。如果 offset 为负，则从 input 末尾倒数该值指定的偏移量开始移除。
         * length 如果省略 length，则移除数组中从 offset 到结尾的所有部分。如果指定了 length 并且为正值，则移除这么多单元。
         *      如果指定了 length 并且为负值，则移除从 offset 到数组末尾倒数 length 为止中间所有的单元。小窍门：当给出了 replacement 时要移除从 offset 到数组末尾所有单元时，用 count($input) 作为 length。
         * replacement
         *      如果给出了 replacement 数组，则被移除的单元被此数组中的单元替代。
         *      如果 offset 和 length 的组合结果是不会移除任何值，则 replacement 数组中的单元将被插入到 offset 指定的位置。 注意替换数组中的键名不保留。
         *      如果用来替换 replacement 只有一个单元，那么不需要给它加上 array()，除非该单元本身就是一个数组、一个对象或者 NULL。
         * 返回一个包含有被移除单元的数组。
         */
        $splice_array = ['红', '黄', '蓝', '绿', '青', '橙', '紫'];

//        $result = array_splice($splice_array,0); // 如果省略 length，则移除数组中从 offset 到结尾的所有部分。
//        print_r($result); // 结果 Array ( [0] => 红 [1] => 黄 [2] => 蓝 [3] => 绿 [4] => 青 [5] => 橙 [6] => 紫 )
//        print_r($splice_array); // 结果 Array ( )

//        $result = array_splice($splice_array,2,3); // 正常用法
//        print_r($result); // 结果 Array ( [0] => 蓝 [1] => 绿 [2] => 青 )
//        print_r($splice_array); // 结果 Array ( [0] => 红 [1] => 黄 [2] => 橙 [3] => 紫 )

//        $result = array_splice($splice_array,0,-1); // length为负数
//        print_r($result); // 结果 Array ( [0] => 红 [1] => 黄 [2] => 蓝 [3] => 绿 [4] => 青 [5] => 橙 )
//        print_r($splice_array); // 结果 Array ( [0] => 紫 )

//        $result = array_splice($splice_array,5,-2); // length为负数
//        print_r($result); // 结果 Array ( )
//        print_r($splice_array); // 结果 Array ( [0] => 红 [1] => 黄 [2] => 蓝 [3] => 绿 [4] => 青 [5] => 橙 [6] => 紫 )

        //从上面三个结果可以看出offset和length与array_slice用法一致,下面看replacement的用法

//        $result = array_splice($splice_array,0,2,'颜色');
//        print_r($result); // 结果 Array ( [0] => 红 [1] => 黄 )
//        print_r($splice_array); // 结果 Array ( [0] => 颜色 [1] => 蓝 [2] => 绿 [3] => 青 [4] => 橙 [5] => 紫 )

//        $result = array_splice($splice_array,null,null,'颜色');
//        //如果 offset 和 length 的组合结果是不会移除任何值，则 replacement 数组中的单元将被插入到 offset 指定的位置,这里offset为null，所以会插入到头部
//        print_r($result); // 结果 Array ( [0] => 红 [1] => 黄 )
//        print_r($splice_array); // 结果 Array ( [0] => 颜色 [1] => 蓝 [2] => 绿 [3] => 青 [4] => 橙 [5] => 紫 )

//        $result = array_splice($splice_array, null, null, ['颜色1']); //如果用来替换 replacement 只有一个单元，那么不需要给它加上 array()
//        $result = array_splice($splice_array, null, null, '颜色1'); //这两种方式结果是一样的
//        print_r($result); // 结果 Array ( )
//        print_r($splice_array); // 结果 Array ( [0] => 颜色1 [1] => 红 [2] => 黄 [3] => 蓝 [4] => 绿 [5] => 青 [6] => 橙 [7] => 紫 )

//        $result = array_splice($splice_array, null, null, ['颜色1','颜色2']); //如果replacement是个数组，则将数组中的元素插入到offset位置
//        print_r($result); // 结果 Array ( )
//        print_r($splice_array); // 结果 Array ( [0] => 颜色1 [1] => 颜色2 [2] => 红 [3] => 黄 [4] => 蓝 [5] => 绿 [6] => 青 [7] => 橙 [8] => 紫 )

        /**
         * array_pad — 用值将数组填补到指定长度
         * array array_pad( array $input, int $pad_size, mixed $pad_value)
         * array_pad() 返回 input 的一个拷贝，并用 pad_value 将其填补到 pad_size 指定的长度。
         * 如果 pad_size 为正，则填补到数组的右侧，如果为负则从左侧开始填补。
         * 如果 pad_size 的绝对值小于或等于 input 数组的长度则没有任何填补。有可能一次最多填补 1048576 个单元。
         * input 需要被填充的原始数组
         * pad_size 新数组的长度
         * pad_value 将被填充的值，只有在 input 的现有长度小于 pad_size 的长度时才有效。
         * 返回值: 返回 input 用 pad_value 填充到 pad_size 指定的长度之后的一个副本。
         * 如果 pad_size 为正，则填补到数组的右侧，如果为负则从左侧开始填补。
         * 如果 pad_size 的绝对值小于或等于 input 数组的长度则没有任何填补。
         */
        $pad_array = [1, 2, 3, 4, 5];

        $result = array_pad($pad_array, 4, '填'); // pad_size的绝对值 <= 原始数组的元素个数,则不填充
//        print_r($result); // 结果 Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )

//        $result = array_pad($pad_array,8,'填'); // pad_size为正数，则向右填充
//        print_r($result); // 结果 Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 填 [6] => 填 [7] => 填 )

        $result = array_pad($pad_array, -8, '填'); // pad_size为负数，则向左填充
//        print_r($result); // 结果 Array ( [0] => 填 [1] => 填 [2] => 填 [3] => 1 [4] => 2 [5] => 3 [6] => 4 [7] => 5 )

        // pad_value可以是string，数组，布尔等等几乎所有类型

        /**
         * array_fill — 用给定的值填充生成一个新数组
         * array array_fill( int $start_index, int $num, mixed $value)
         * array_fill() 用 value 参数的值将一个数组填充 num 个条目，键名由 start_index 参数指定的开始。
         * start_index 返回的数组的第一个索引值。 如果 start_index 是负数，那么返回的数组的第一个索引将会是 start_index ，而后面索引则从0开始。
         * num 插入元素的数量。必须大于 0
         * value 用来填充的值。
         * 返回值: 返回填充后的数组。
         */
        $result = array_fill(-2, 3, 'fill'); //如果 start_index 是负数，那么返回的数组的第一个索引将会是 start_index ，而后面索引则从0开始。
//        print_r($result); // 结果 Array ( [-2] => fill [0] => fill [1] => fill )
        $result = array_fill(4, 5, 'fill'); // 如果 start_index是正数，那么按正常索引排序
//        print_r($result); // 结果 Array ( [4] => fill [5] => fill [6] => fill [7] => fill [8] => fill )
        $result = array_fill(0, 10, 'fill'); // 正常用法
//        print_r($result); // 结果 Array ( [0] => fill [1] => fill [2] => fill [3] => fill [4] => fill [5] => fill [6] => fill [7] => fill [8] => fill [9] => fill )

        /**
         * range — 建立一个包含指定范围单元的数组
         * array range( mixed $start, mixed $limit[, number $step = 1] )
         * 建立一个包含指定范围单元的数组。
         * start 序列的第一个值。
         * limit 序列结束于 limit 的值。
         * step 如果给出了 step 的值，它将被作为单元之间的步进值。step 应该为正值。如果未指定，step 则默认为 1。
         * 返回: 返回填充后的数组
         */
//        $result = range(0,5);
//        print_r($result); // 结果 Array ( [0] => 0 [1] => 1 [2] => 2 [3] => 3 [4] => 4 [5] => 5 )

//        $result = range(0,-5);
//        print_r($result); // 结果 Array ( [0] => 0 [1] => -1 [2] => -2 [3] => -3 [4] => -4 [5] => -5 )

//        $result = range(0,5,2); // step = 2
//        print_r($result); // 结果 Array ( [0] => 0 [1] => 2 [2] => 4 )

        // 从上面可以看出，start是初始值，limit是结束值，step是步进值

        /**
         * array_fill_keys — 使用指定的键和值填充数组
         * array array_fill_keys( array $keys, mixed $value)
         * 使用 value 参数的值作为值，使用 keys 数组的值作为键来填充一个数组。
         * keys 使用该数组的值作为键。非法值将被转换为字符串。
         * value 填充使用的值。
         * 返回: 返回填充后的数组
         */
        $keys = ['one', 'two', null, '', true];
        $values = '充';
        $result = array_fill_keys($keys, $values);
//        print_r($result); // 结果 Array ( [one] => 充 [two] => 充 [] => 充 [1] => 充 )  null,''是非法值都变为空，true转换成了1

    }

    /**
     * 栈
     * array_push — 将一个或多个单元压入数组的末尾（入栈）-也就是从右侧压入
     * array_pop — 将数组最后一个单元弹出（出栈）- 从右侧弹出
     */
    public function push_pop()
    {
        /**
         * array_push — 将一个或多个单元压入数组的末尾（入栈）-也就是从右侧压入
         * int array_push( array &$array, mixed $var[, mixed $...] )
         * 如果用 array_push() 来给数组增加一个单元，还不如用 $array[] =
         * array_push() 将 array 当成一个栈，并将传入的变量压入 array 的末尾。array 的长度将根据入栈变量的数目增加。和如下效果相同,并对每个 var 重复以上动作。
         *      $array[] = $var;
         *      Note: 如果用 array_push() 来给数组增加一个单元，还不如用 $array[] = ，因为这样没有调用函数的额外负担。
         *      Note: 如果第一个参数不是数组，array_push() 将发出一条警告。这和 $var[] 的行为不同，后者会新建一个数组。
         *
         * @params array 输入的数组。
         * @params var 要压入的值。
         * @return int 返回处理之后数组的元素个数。
         */
        $push_array = [1, 2, 3];
        $result = array_push($push_array, 4, 5, 6);
//        print_r($result); // 结果 6
//        print_r($push_array); // 结果 Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )

        /**
         * array_pop — 将数组最后一个单元弹出（出栈）- 从右侧弹出
         * mixed array_pop( array &$array)
         * array_pop() 弹出并返回 array 数组的最后一个单元，并将数组 array 的长度减一。如果 array 为空（或者不是数组）将返回 NULL。
         *      Note: 使用此函数后会重置（reset()）array 指针。
         * array 需要做出栈的数组。
         * 返回值: 返回 array 的最后一个值。如果 array 是空（如果不是一个数组），将会返回 NULL
         */
        $pop_array = [];
        $result = array_pop($pop_array); // 如果 array 为空（或者不是数组）将返回 NULL。
//        print_r($result); // 结果 NULL
//        print_r($pop_array); // 结果 Array ( )

        $pop_array = [1, 2, 3];
        $result = array_pop($pop_array);
//        print_r($result); // 结果 3
//        print_r($pop_array); // 结果 Array ( [0] => 1 [1] => 2 )
    }


    /**
     * 队列
     * array_unshift — 在数组开头插入一个或多个单元
     * array_shift — 将数组开头的单元移出数组
     */
    public function shift_unshift()
    {
        /**
         * array_unshift — 在数组开头插入一个或多个单元
         * int array_unshift( array &$array, mixed $var[, mixed $...] )
         * array_unshift() 将传入的单元插入到 array 数组的开头。
         * 注意单元是作为整体被插入的，因此传入单元将保持同样的顺序。
         * 所有的数值键名将修改为从零开始重新计数，所有的文字键名保持不变。
         * @params array 输入的数组
         * @params var 开头插入的变量
         * @return int 数组新的单元数目
         */
        $unshift_array = [1, 2, 3];
        $result = array_unshift($unshift_array, 4, 5, 6);
//        print_r($result); // 结果 6
//        print_r($unshift_array); // 结果 Array ( [0] => 4 [1] => 5 [2] => 6 [3] => 1 [4] => 2 [5] => 3 )

        /**
         * array_shift — 将数组开头的单元移出数组
         * mixed array_shift( array &$array)
         * array_shift() 将 array 的第一个单元移出并作为结果返回，将 array 的长度减一并将所有其它单元向前移动一位。
         * 所有的数字键名将改为从零开始计数，文字键名将不变。
         * Note: 使用此函数后会重置（reset()）array 指针。
         * @params array 输入的数组
         * @return mixed 返回移出的值，如果 array 为 空或不是一个数组则返回 NULL
         */
        $shift_array = [4, 5, 6];
        $result = array_shift($shift_array);
//        print_r($result); // 结果 4
//        print_r($shift_array); // 结果 Array ( [0] => 5 [1] => 6 )
    }

    /**
     * 回调函数(循环处理的函数)
     * @note 回调函数的调用方式，array_walk($this->crr, [$this,'方法名'],['one'=>2,'two'=>4]);
     * array_walk — 使用用户自定义函数对数组中的每个元素做回调处理
     * array_walk_recursive — 对数组中的每个成员递归地应用用户函数
     * array_map — 将回调函数作用到给定数组的单元上
     * array_filter — 用回调函数过滤数组中的单元
     * array_reduce — 用回调函数迭代地将数组简化为单一的值
     */
    public function call_fun()
    {
        /**
         * @defination array_walk — 使用用户自定义函数对数组中的每个元素做回调处理
         * @bool array_walk( array &$array, callable $funcname[, mixed $userdata = NULL] )
         * @description 将用户自定义函数 funcname 应用到 array 数组中的每个单元。
         * @notes array_walk() 不会受到 array 内部数组指针的影响。array_walk() 会遍历整个数组而不管指针的位置。
         * @params array 输入的数组
         * @params funcname 典型情况下 funcname 接受两个参数。array 参数的值作为第一个，键名作为第二个
         *      Note:如果 funcname 需要直接作用于数组中的值，则给 funcname 的第一个参数指定为引用。这样任何对这些单元的改变也将会改变原始数组本身。
         *      Note:只有 array 的值才可以被改变，用户不应在回调函数中改变该数组本身的结构。例如增加/删除单元，unset 单元等等。如果 array_walk() 作用的数组改变了，则此函数的的行为未经定义，且不可预期。
         * @params userdata 如果提供了可选参数 userdata，将被作为第三个参数传递给 callback funcname。
         * @return bool 成功时返回 TRUE， 或者在失败时返回 FALSE
         */
        $walk_array = [
            ['name' => '张三', 'phone' => '123456789'],
            ['name' => '李四', 'phone' => '123456789'],
            ['name' => '王二', 'phone' => '123456789'],
        ];
        $param1 = '参数1';
        $param2 = '参数2';

        // 对每一个元素做回调处理，传值有两种方式，一种是使用use,另外一种是传递第三个参数，function中用第三个参数接收
        // 如果想修改数组原来本身，则加&引用即可

        // 方式一
//        $result = array_walk($walk_array, function (&$value, $index, $params) {
//
//            $value['name'] = $params['param1'] . '-' . $value['name'] . '-' . $params['param2'];
//
//        }, ['param1' => $param1, 'param2' => $param2]);

        // 方式二
//        $params = ['param1' => $param1, 'param2' => $param2];
//        $result = array_walk($walk_array, function (&$value, $index) use ($params) {
//
//            $value['name'] = $params['param1'] . '-' . $value['name'] . '-' . $params['param2'];
//
//        });
//
//        print_r($result); // 结果 1
//        print_r($walk_array);

        /**
         * array_walk_recursive — 对数组中的每个成员递归地应用用户函数
         * bool array_walk_recursive( array &$input, callable $funcname[, mixed $userdata = NULL] )
         * 将用户自定义函数 funcname 应用到 array 数组中的每个单元。本函数会递归到更深层的数组中去
         * input 输入的数组。
         * funcname 典型情况下 funcname 接受两个参数。input 参数的值作为第一个，键名作为第二个。
         * Note: 如果 funcname 需要直接作用于数组中的值，则给 funcname 的第一个参数指定为引用。这样任何对这些单元的改变也将会改变原始数组本身。
         * userdata 如果提供了可选参数 userdata，将被作为第三个参数传递给 callback funcname。
         * 成功时返回 TRUE， 或者在失败时返回 FALSE
         */
//        $fruits = ['sweet' => ['a' => 'apple', 'b' => 'banana'], 'sour' => 'lemon'];
//        array_walk_recursive($fruits, function (&$value, $key) {
//            $value = $value.'@';
//            echo $value . '-' . $key.'</br>';
//        });
        // 结果
        //apple-a
        //banana-b
        //lemon-sour
//        print_r($fruits);
        // 结果 Array ( [sweet] => Array ( [a] => apple@ [b] => banana@ ) [sour] => lemon@ )


        /**
         * array_map — 将回调函数作用到给定数组的单元上
         * array array_map( callable $callback, array $arr1[, array $...] )
         * Note: map遍历的次数由后面数组中元素个数最大的决定
         *      通常使用了两个或更多数组时，它们的长度应该相同，因为回调函数是平行作用于相应的单元上的。如果数组的长度不同，则最短的一个将被用空的单元扩充。
         * array_map() 返回一个数组，该数组包含了 arr1 中的所有单元经过 callback 作用过之后的单元。callback 接受的参数数目应该和传递给 array_map() 函数的数组数目一致。
         * @param callback 对每个数组的每个元素作用的回调函数
         * @param arr1 将被回调函数（callback）执行的数组
         * @param array 将被回调函数（callback）执行的数组列表
         * @return array 返回一个数组，该数组的每个元素都数组（arr1）里面的每个元素经过回调函数（callback）处理了的
         */

        // 简单使用
//        $a = [1, 2, 3, 4, 5];
//        $result = array_map(function ($v) {
//            return $v * $v * $v;
//        }, $a);
//        print_r($result); // 结果 Array ( [0] => 1 [1] => 8 [2] => 27 [3] => 64 [4] => 125 )

        // 使用两个数组,返回的元素个数，由最大的数组元素决定
        $a = [1, 2, 3, 4, 5];
        $b = ['红', '橙', '黄', '绿', '青', '蓝', '紫色'];
//        $result = array_map(function ($v1, $v2) {
//            return $v1 . '-' . $v2;
//        }, $a, $b);
//        print_r($result); // 结果 Array ( [0] => 1-红 [1] => 2-橙 [2] => 3-黄 [3] => 4-绿 [4] => 5-青 [5] => -蓝 [6] => -紫色 )

//        $result = array_map(function ($v1, $v2) {
//            return [$v1 => $v2];
//        }, $a, $b);
//        print_r($result); // 结果 Array ( [0] => Array ( [1] => 红 ) [1] => Array ( [2] => 橙 ) [2] => Array ( [3] => 黄 ) [3] => Array ( [4] => 绿 ) [4] => Array ( [5] => 青 ) [5] => Array ( [] => 蓝 ) [6] => Array ( [] => 紫色 ) )

        // 通过array_map实现构造数组，将多个数组合并为一个数组,回调函数为null
//        $a = [1, 2, 3, 4, 5];
//        $b = ['one', 'two', 'three', 'four', 'five'];
//        $c = ['一', '二', '三', '四', '五'];
//        $result = array_map(null, $a, $b, $c);
//        print_r($result); // 结果 Array ( [0] => Array ( [0] => 1 [1] => one [2] => 一 ) [1] => Array ( [0] => 2 [1] => two [2] => 二 ) [2] => Array ( [0] => 3 [1] => three [2] => 三 ) [3] => Array ( [0] => 4 [1] => four [2] => 四 ) [4] => Array ( [0] => 5 [1] => five [2] => 五 ) )


        // 如果数组参数里面有字符串的键，那么返回的数组就会包含字符串的键，仅且仅当只传入一个数组的时候（试了下，就是原数组返回，没变化啊，这不是蛋疼么？）。
        // 如果不止一个数组被传入，那么返回的数组的的键都是整型。

//        $a = ['one' => 1, 'two' => 2];
//        $result = array_map(function ($v) {
//            return array($v);
//        }, $a);
//        print_r($result); // 结果 Array ( [one] => Array ( [0] => 1 ) [two] => Array ( [0] => 2 ) )

//        $a = ['one' => 1, 'two' => 2];
//        $result = array_map(function ($v1, $v2) {
//            return array($v1, $v2);
//        }, $a, $a);
//        print_r($result); // 结果 Array ( [0] => Array ( [0] => 1 [1] => 1 ) [1] => Array ( [0] => 2 [1] => 2 ) )

        /**
         * array_filter
         * array_filter — 用回调函数过滤数组中的单元
         * array array_filter( array $array[, callable $callback[, int $flag = 0]] )
         * 依次将 input 数组中的每个值传递到 callback 函数。如果 callback 函数返回 TRUE，则 input 数组的当前值会被包含在返回的结果数组中。
         * @param input 要循环的数组
         * @param callback 使用的回调函数
         *      Note: 如果没有提供 callback 函数，将删除 input 中所有等值为 FALSE 的条目。
         *      当转换为 boolean 时，以下值被认为是 FALSE：
         * ◦ 布尔值 FALSE 本身
         * ◦ 整型值 0（零）
         * ◦ 浮点型值 0.0（零）
         * ◦ 空字符串，以及字符串 "0"
         * ◦ 不包括任何元素的数组
         * ◦ 不包括任何成员变量的对象（仅 PHP 4.0 适用）
         * ◦ 特殊类型 NULL（包括尚未赋值的变量）
         * ◦ 从空标记生成的 SimpleXML 对象
         * 所有其它值都被认为是 TRUE（包括任何资源）。
         * @param flag 决定callback接收的参数形式
         * ◦ ARRAY_FILTER_USE_KEY - callback接受键名作为的唯一参数
         * ◦ ARRAY_FILTER_USE_BOTH - callback同时接受键名和键值
         * @return array 返回过滤后的数组
         */
        // 输出都为奇数的
//        $filter_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
//        $result = array_filter($filter_array,function($value,$index){
//            return ($value & 1);
//        },ARRAY_FILTER_USE_BOTH);
//        print_r($result);

        // 输出都为偶数的
//        $filter_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
//        $result = array_filter($filter_array,function($value,$index){
//            return !($value & 1);
//        },ARRAY_FILTER_USE_BOTH);
//        print_r($result);

        // 去除数组中为空的
//        $filter_array = [1, 5, null, '', false, 0, 0.0, '0', '0.0'];
//        $result = array_filter($filter_array);
//        print_r($result);

        /**
         * array_reduce — 用回调函数迭代地将数组简化为单一的值
         * mixed array_reduce( array $input, callable $function[, mixed $initial = NULL] )
         * array_reduce() 将回调函数 function 迭代地作用到 input 数组中的每一个单元中，从而将数组简化为单一的值。
         * @param input 输入的数组
         * @param callable 回调函数
         * @param initial 如果指定了可选参数 initial，该参数将被当成是数组中的第一个值来处理，或者如果数组为空的话就作为最终返回值
         * @return mixed initial 参数，array_reduce() 返回 NULL。
         */

        // 如果指定了可选参数 initial，该参数将被当成是数组中的第一个值来处理，或者如果数组为空的话就作为最终返回值
//        $reduce_array = [];
//        $result = array_reduce($reduce_array, function () {
//            return;
//        }, '初始值');
//        print_r($result); // 结果 初始值

        // 指定initial,并且use使用参数
//        $reduce_array = ['one', 'two'];
//        $str = '/';
//        $result = array_reduce($reduce_array, function ($v1, $v2) use ($str) {
//            return $v1 . $v2 . $str;
//        }, '@');
//        print_r($result); // 结果 @one/two/

        // 上面都是处理一维数组，下面看一下二维数组
//        $reduce_array = [
//            ['name' => '张三'],
//            ['name' => '李四'],
//        ];
//        $result = array_reduce($reduce_array, function ($v1, $v2) {
//            $temp = [];
//            $temp['name'] = $v1['name'] . '/' . $v2['name'];
//            return $temp;
//        }, ['name' => '第一个初始name']);
//        print_r($result); // 结果 Array ( [name] => /张三/李四 )

        // 复杂点的应用,组合方式
//        $arr = [
//            ['红', '黄', '蓝'],
//            ['大', '中', '小']
//        ];
//        $str = ';';
//        $result = array_reduce($arr, function ($v, $m) use ($str) {
//            $temp = [];
//            foreach ($v as $vv) {
//                foreach ($m as $mm) {
//                    if (empty($vv)) {
//                        $temp[] = $mm;
//                    } else {
//                        $temp[] = $vv . $str . $mm;
//                    }
//                }
//            }
//            return $temp;
//        }, ['']);
//        print_r($result); // 结果 Array ( [0] => 红;大 [1] => 红;中 [2] => 红;小 [3] => 黄;大 [4] => 黄;中 [5] => 黄;小 [6] => 蓝;大 [7] => 蓝;中 [8] => 蓝;小 )

    }

    /**
     * 排序
     * 无r:正向排序，有r:逆向排序
     * 无a:排序后的索引从0开始，有a:保持原来的索引关系
     * sort — 对数组升序排序
     * rsort — 对数组逆向排序(用法与sort一致)
     * asort — 对数组进行排序并保持索引关系
     * arsort — 对数组进行逆向排序并保持索引关系
     * ksort — 对数组按照键名排序
     * krsort — 对数组按照键名逆向排序
     * usort — 使用用户自定义的比较函数对数组中的值进行排序
     * uksort — 使用用户自定义的比较函数对数组中的键名进行排序
     * uasort — 使用用户自定义的比较函数对数组中的值进行排序并保持索引关联
     * 特殊排序
     * natsort — 用"自然排序"算法对数组排序
     * natcasesort — 用"自然排序"算法对数组进行不区分大小写字母的排序
     * 多个数组或多维数组进行排序
     * array_multisort — 对多个数组或多维数组进行排序
     */
    public function sort_fun()
    {
        /**
         * sort — 对数组升序排序
         * bool sort( array &$array[, int $sort_flags = SORT_REGULAR] )
         * 本函数对数组进行排序。当本函数结束时数组单元将被从最低到最高重新安排。
         *      Note: 此函数为 array 中的元素赋与新的键名。这将删除原有的键名，而不是仅仅将键名重新排序。
         * @param array 要排序的数组
         * @param sort_flags 可选的第二个参数 sort_flags 可以用以下值改变排序的行为：
         * 排序类型标记：
         * ◦ SORT_REGULAR - 正常比较单元（不改变类型） 把每一项按常规顺序排列（Standard ASCII，不改变类型）
         * ◦ SORT_NUMERIC - 单元被作为数字来比较
         * ◦ SORT_STRING - 单元被作为字符串来比较
         * ◦ SORT_LOCALE_STRING - 根据当前的区域（locale）设置来把单元当作字符串比较，可以用 setlocale() 来改变。
         * ◦ SORT_NATURAL - 和 natsort() 类似对每个单元以"自然的顺序"对字符串进行排序。 PHP 5.4.0 中新增的。
         * ◦ SORT_FLAG_CASE - 能够与 SORT_STRING 或 SORT_NATURAL 联合使用（OR 位运算），不区分大小写排序字符串。
         * @return bool 成功时返回 TRUE， 或者在失败时返回 FALSE
         */
        // SORT_REGULAR 是按照标准ASCII码排序的，不改变类型，注意这里都是字符，比如'1','2'
        // SORT_NUMERIC 是按照数字来比较
        // SORT_STRING  是按照字符串来比较
        // SORT_LOCALE_STRING 根据当前的区域（locale）设置来把单元当作字符串比较(基本不用)
        // SORT_NATURAL 对每个单元以"自然的顺序"对字符串进行排序,可以理解为，先根据首字母ASCII排序，然后第二个，第三个，依次类推,如果遇到数字，将会把数字部分整体排序，而不是一个个
        // SORT_FLAG_CASE 与 SORT_STRING 或 SORT_NATURAL 联合使用,不区分大小写排序字符串


        // SORT_REGULAR 默认的正常排序-纯数字
//        $a = [12, 34, 56, 29, 90, 54];
//        $result = sort($a);
//        print_r($a); // 结果 Array ( [0] => 12 [1] => 29 [2] => 34 [3] => 54 [4] => 56 [5] => 90 )

        // SORT_REGULAR 默认的正常排序-纯字母/字符
//        $a = ['b', 'a', '/', 'z', 'H', 'A', 'B', '\\', '<', '_', '0', '1', '2'];
//        $result = sort($a);
//        print_r($a); // 结果 Array ( [0] => / [1] => A [2] => B [3] => H [4] => \ [5] => a [6] => b [7] => z )


        // SORT_REGULAR 默认的正常排序-字符+中文
//        $a = ['无敌', '字符', 'a', 'ab', 'b', '30', '301', '张三', '李四', '王二', '麻子'];
//        $result = sort($a);
//        print_r($a); // 结果 Array ( [0] => 30 [1] => 301 [2] => a [3] => ab [4] => b [5] => 字符 [6] => 张三 [7] => 无敌 [8] => 李四 [9] => 王二 [10] => 麻子 )

        // SORT_REGULAR 默认的正常排序-中文
//        $a = ['测试', '什么', '情况', '可以', '很好', '非常牛'];
//        $result = sort($a); // 结果 Array ( [0] => 什么 [1] => 可以 [2] => 很好 [3] => 情况 [4] => 测试 [5] => 非常牛 )
//        print_r($a);

        // SORT_NUMERIC 按照数字来比较-数字/数字字符
//        $a = [1, '1', 2, '21', 89, '76', true, false, null];
//        $result = sort($a, SORT_NUMERIC);
//        print_r($a); // 结果 Array ( [0] => [1] => [2] => 1 [3] => 1 [4] => 1 [5] => 2 [6] => 21 [7] => 76 [8] => 89 )

        // SORT_STRING 按照字符串来比较-字符串
//        $a = ['1', 10, '99', '76', '102', 38, '45'];
//        $result = sort($a,SORT_STRING);
//        print_r($a); // 结果 Array ( [0] => 1 [1] => 10 [2] => 102 [3] => 38 [4] => 45 [5] => 76 [6] => 99 )

        // SORT_LOCALE_STRING 根据当前的区域（locale）设置来把单元当作字符串比较，可以用 setlocale() 来改变
//        $a = ['20', '201', 1, '5', 6];
//        $result = sort($a, SORT_LOCALE_STRING);
//        print_r($a); // 结果 Array ( [0] => 1 [1] => 20 [2] => 201 [3] => 5 [4] => 6 )

        // SORT_NATURAL 对每个单元以"自然的顺序"对字符串进行排序
//        $a = ["Orange1", "orange2", "Orange3", "orange20"];
//        $result = sort($a, SORT_NATURAL);
//        print_r($a); // 结果 Array ( [0] => Orange1 [1] => Orange3 [2] => orange2 [3] => orange20 )

        // SORT_FLAG_CASE 与 SORT_STRING 或 SORT_NATURAL 联合使用,不区分大小写排序字符串
//        $a = ["Orange1d", "orange2c", "Orange3b", "orange20a"];
//        $result = sort($a, SORT_NATURAL | SORT_FLAG_CASE);
//        print_r($a); // 结果 Array ( [0] => Orange1d [1] => orange2c [2] => Orange3b [3] => orange20a )

        /**
         * rsort — 对数组逆向排序(用法与sort一致)
         * bool rsort( array &$array[, int $sort_flags = SORT_REGULAR] )
         * @param input 输入的数组
         * @param sort_flogs 可以用可选参数 sort_flags 改变排序的行为，参数与sort相同
         * @return bool 成功时返回 TRUE， 或者在失败时返回 FALSE
         */
//        $a = [12, 34, 56, 29, 90, 54];
//        $result = rsort($a);
//        print_r($a); // 结果 Array ( [0] => 90 [1] => 56 [2] => 54 [3] => 34 [4] => 29 [5] => 12 )

        /**
         * asort — 对数组进行排序并保持索引关系
         * bool asort( array &$array[, int $sort_flags = SORT_REGULAR] )
         * 本函数对数组进行排序，数组的索引保持和单元的关联。主要用于对那些单元顺序很重要的结合数组进行排序。
         * @param input 输入的数组
         * @param sort_flogs 可以用可选参数 sort_flags 改变排序的行为，参数与sort相同
         * @return bool 成功时返回 TRUE， 或者在失败时返回 FALSE
         */
//        $a = [12, 34, 56, 29, 90, 54];
//        $result = asort($a);
//        print_r($a); // 结果 Array ( [0] => 12 [3] => 29 [1] => 34 [5] => 54 [2] => 56 [4] => 90 )

        /**
         * arsort — 对数组进行逆向排序并保持索引关系
         * bool arsort( array &$array[, int $sort_flags = SORT_REGULAR] )
         * 本函数对数组进行排序，数组的索引保持和单元的关联 主要用于对那些单元顺序很重要的结合数组进行排序。
         * @param input 输入的数组
         * @param sort_flogs 可以用可选参数 sort_flags 改变排序的行为，参数与sort相同
         * @return bool 成功时返回 TRUE， 或者在失败时返回 FALSE
         */
//        $a = [12, 34, 56, 29, 90, 54];
//        $result = arsort($a);
//        print_r($a); // 结果 Array ( [4] => 90 [2] => 56 [5] => 54 [1] => 34 [3] => 29 [0] => 12 )

        /**
         * ksort — 对数组按照键名排序
         * bool ksort( array &$array[, int $sort_flags = SORT_REGULAR] )
         * 对数组按照键名排序，保留键名到数据的关联。本函数主要用于关联数组。
         * @param input 输入的数组
         * @param sort_flogs 可以用可选参数 sort_flags 改变排序的行为，参数与sort相同
         * @return bool 成功时返回 TRUE， 或者在失败时返回 FALSE
         */
//        $a = [4=>12, 2=>34, 6=>56, 10=>29, 1=>90, 3=>54];
//        $result = ksort($a);
//        print_r($a); // 结果 Array ( [1] => 90 [2] => 34 [3] => 54 [4] => 12 [6] => 56 [10] => 29 )

        /**
         * krsort — 对数组按照键名逆向排序
         * bool krsort( array &$array[, int $sort_flags = SORT_REGULAR] )
         * 对数组按照键名逆向排序，保留键名到数据的关联。主要用于结合数组。
         * @param input 输入的数组
         * @param sort_flogs 可以用可选参数 sort_flags 改变排序的行为，参数与sort相同
         * @return bool 成功时返回 TRUE， 或者在失败时返回 FALSE
         */
//        $a = [4=>12, 2=>34, 6=>56, 10=>29, 1=>90, 3=>54];
//        $result = krsort($a);
//        print_r($a); // 结果 Array ( [10] => 29 [6] => 56 [4] => 12 [3] => 54 [2] => 34 [1] => 90 )


        /**
         * 更多例子看手册
         * usort — 使用用户自定义的比较函数对数组中的值进行排序
         * bool usort( array &$array, callable $cmp_function)
         * 本函数将用用户自定义的比较函数对一个数组中的值进行排序。如果要排序的数组需要用一种不寻常的标准进行排序，那么应该使用此函数。
         * Note:如果两个成员比较结果相同，则它们在排序后的数组中的顺序未经定义。
         * Note:此函数为 array 中的元素赋与新的键名。这将删除原有的键名，而不是仅仅将键名重新排序。
         * array 输入的数组
         * cmp_function 在第一个参数小于，等于或大于第二个参数时，该比较函数必须相应地返回一个小于，等于或大于 0 的整数。
         * @return bool 成功时返回 TRUE， 或者在失败时返回 FALSE。
         */
//        $a = [3, 2, 5, 6, 1];
//        $result = usort($a, function ($v1, $v2) {
//            if ($v1 > $v2) {
//                return 1;
//            } else if ($v1 == $v2) {
//                return 0;
//            } else if ($v1 < $v2){
//                return -1;
//            }
//        });
//        print_r($a); // 结果 Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 5 [4] => 6 )
        // 比较复杂的用法,这里实现了根据二维数组的某个列进行排序
//        $array[0] = array('key_a' => 'z', 'key_b' => 'c');
//        $array[1] = array('key_a' => 'x', 'key_b' => 'b');
//        $array[2] = array('key_a' => 'y', 'key_b' => 'a');
//
//        function build_sorter($key)
//        {
//            return function ($a, $b) use ($key) {
//                return strnatcmp($a[$key], $b[$key]);
//            };
//        }
//
//        usort($array, build_sorter('key_b'));
//        print_r($array); // 结果 Array ( [0] => Array ( [key_a] => y [key_b] => a ) [1] => Array ( [key_a] => x [key_b] => b ) [2] => Array ( [key_a] => z [key_b] => c ) )
//        foreach ($array as $item) {
//            echo $item['key_a'] . ', ' . $item['key_b'] . "\n";
//        }
        // 结果 y, a x, b z, c

        // 上面结果是回调函数，下面不用回调
//        $array[0] = array('key_a' => 'z', 'key_b' => 'c');
//        $array[1] = array('key_a' => 'x', 'key_b' => 'b');
//        $array[2] = array('key_a' => 'y', 'key_b' => 'a');
//        $key = 'key_b';
//        usort($array, function ($a, $b) use ($key) {
//            return strnatcmp($a[$key], $b[$key]);
//        });
//        print_r($array); // 结果 Array ( [0] => Array ( [key_a] => y [key_b] => a ) [1] => Array ( [key_a] => x [key_b] => b ) [2] => Array ( [key_a] => z [key_b] => c ) )

        // 应用场景，有一个二维数组，需要根据name排序
//        $array[] = ['id'=>2,'name'=>'张三'];
//        $array[] = ['id'=>1,'name'=>'李四'];
//        $array[] = ['id'=>3,'name'=>'麻子'];
//        $array[] = ['id'=>5,'name'=>'王五'];
//        $array[] = ['id'=>10,'name'=>'实物'];
//        $key = 'id';
//        usort($array, function ($a, $b) use ($key) {
//            return strnatcmp($a[$key], $b[$key]);
//        });
//        print_r($array); // Array ( [0] => Array ( [id] => 1 [name] => 李四 ) [1] => Array ( [id] => 2 [name] => 张三 ) [2] => Array ( [id] => 3 [name] => 麻子 ) [3] => Array ( [id] => 5 [name] => 王五 ) [4] => Array ( [id] => 10 [name] => 实物 ) )

        /**
         * uksort — 使用用户自定义的比较函数对数组中的键名进行排序
         * bool uksort( array &$array, callable $cmp_function)
         * uksort() 函数将使用用户提供的比较函数对数组中的键名进行排序。如果要排序的数组需要用一种不寻常的标准进行排序，那么应该使用此函数。
         * array 输入的数组。
         * cmp_function 在第一个参数小于，等于或大于第二个参数时，该比较函数必须相应地返回一个小于，等于或大于 0 的整数。
         *          int callback ( mixed $a, mixed $b )
         * 成功时返回 TRUE， 或者在失败时返回 FALSE。
         */

//        $a = array("John" => 1, "the Earth" => 2, "an apple" => 3, "a banana" => 4);
//
//        uksort($a, function ($a, $b) {
//            $a = preg_replace('@^(a|an|the) @', '', $a);
//            $b = preg_replace('@^(a|an|the) @', '', $b);
//            return strcasecmp($a, $b);
//        });
//
//        foreach ($a as $key => $value) {
//            echo "$key: $value\n";
//        }
        // 结果 an apple: 3 a banana: 4 the Earth: 2 John: 1

        /**
         * uasort — 使用用户自定义的比较函数对数组中的值进行排序并保持索引关联
         * bool uasort( array &$array, callable $cmp_function)
         * 本函数对数组排序并保持索引和单元之间的关联。
         * 主要用于对那些单元顺序很重要的结合数组进行排序。比较函数是用户自定义的。
         * array 输入的数组。
         * cmp_function 用户自定义比较函数的例子请参考 usort() 和 uksort()。
         */
//        $array = array('a' => 4, 'b' => 8, 'c' => -1, 'd' => -9, 'e' => 2, 'f' => 5, 'g' => 3, 'h' => -4);
//        uasort($array, function ($a, $b) {
//            if ($a == $b) {
//                return 0;
//            }
//            return ($a < $b) ? -1 : 1;
//        });
//        print_r($array);

        /**
         * natsort — 用"自然排序"算法对数组排序
         * natsort与asort的SORT_NATURAL有异曲同工之妙
         * bool natsort( array &$array)
         * 函数实现了一个和人们通常对字母数字字符串进行排序的方法一样的排序算法并保持原有键／值的关联，这被称为"自然排序"。
         * @param array  输入的 array
         * @return 成功时返回 TRUE， 或者在失败时返回 FALSE
         */
//        $a = ["Orange1", "orange2", "Orange3", "orange20"];
//        $result = natsort($a);
//        print_r($a); // 结果 Array ( [0] => Orange1 [2] => Orange3 [1] => orange2 [3] => orange20 )

        /**
         * natcasesort — 用"自然排序"算法对数组进行不区分大小写字母的排序
         * bool natcasesort( array &$array)
         * natcasesort() 是 natsort() 函数的不区分大小写字母的版本
         * 本函数实现了一个和人们通常对字母数字字符串进行排序的方法一样的排序算法并保持原有键／值的关联，这被称为"自然排序"。
         * @param array  输入的 array
         * @return 成功时返回 TRUE， 或者在失败时返回 FALSE
         */
//        $a = ["Orange1", "orange2", "Orange3", "orange20"];
//        $result = natcasesort($a);
//        print_r($a); // 结果 Array ( [0] => Orange1 [1] => orange2 [2] => Orange3 [3] => orange20 )

        /**
         * array_multisort — 对多个数组或多维数组进行排序
         * bool array_multisort( array &$arr[, mixed $arg = SORT_ASC[, mixed $arg = SORT_REGULAR[, mixed $...]]] )
         * array_multisort() 可以用来一次对多个数组进行排序，或者根据某一维或多维对多维数组进行排序。
         * 关联（string）键名保持不变，但数字键名会被重新索引
         *  排序顺序标志：
         * ◦ SORT_ASC - 按照上升顺序排序
         * ◦ SORT_DESC - 按照下降顺序排序
         *
         * 排序类型标志：
         * ◦ SORT_REGULAR - 将项目按照通常方法比较
         * ◦ SORT_NUMERIC - 将项目按照数值比较
         * ◦ SORT_STRING - 将项目按照字符串比较
         * 每个数组之后不能指定两个同类的排序标志。每个数组后指定的排序标志仅对该数组有效 - 在此之前为默认值 SORT_ASC 和 SORT_REGULAR。
         * 输入数组被当成一个表的列并以行来排序——这类似于 SQL 的 ORDER BY 子句的功能。第一个数组是要排序的主要数组。数组中的行（值）比较为相同的话就按照下一个输入数组中相应值的大小来排序，依此类推。
         * 本函数的参数结构有些不同寻常，但是非常灵活。第一个参数必须是一个数组。接下来的每个参数可以是数组或者是下面列出的排序标志。
         * arr 要排序的一个 array。
         * arg 接下来的每个参数可以是另一个 array 或者是为之前 array 排序标志选项参数： SORT_ASC, SORT_DESC, SORT_REGULAR, SORT_NUMERIC, SORT_STRING.
         * ...
         * Additional arg's.
         * 成功时返回 TRUE， 或者在失败时返回 FALSE。
         * 注意的是:每个数组的元素个数要一直，否则报错 Warning: array_multisort(): Array sizes are inconsistent
         */

        // 输入数组被当成一个表的列并以行来排序，意思是第一个数组的第一项，第二个数组的第一项,.....第n个数组的第一项，组成一个行记录，排序的时候是行之间的排序调整.第二行，第三行......依次类推。
//        $ar1 = array(10, 100, 100, 0);
//        $ar2 = array(1, 3, 2, 4);
//        array_multisort($ar1, $ar2);
//        print_r($ar1); // 结果 Array ( [0] => 0 [1] => 10 [2] => 100 [3] => 100 )
//        print_r($ar2); // 结果 Array ( [0] => 4 [1] => 1 [2] => 2 [3] => 3 )

        // 排序多维数组,当按第一个排序以后，如果第一个中有相同的元素值，那么相同元素值对应的元素，将会按照第二个数组指定的排序方式进行排序
//        $ar = array(
//            array("10", 11, 100, 100, "a", 'b','c'),
//            array(1, 2, "2", 3, 1, 10,11)
//        );
//        array_multisort($ar[0], SORT_ASC, SORT_STRING, $ar[1], SORT_NUMERIC, SORT_DESC);
//        print_r($ar); // 结果 Array ( [0] => Array ( [0] => 10 [1] => 100 [2] => 100 [3] => 11 [4] => a ) [1] => Array ( [0] => 1 [1] => 3 [2] => 2 [3] => 2 [4] => 1 ) )
//        // 分析，本例中在排序后，第一个数组将变成 "10"，100，100，11，"a"（被当作字符串以升序排列）。第二个数组将包含 1, 3, "2", 2, 1（被当作数字以降序排列）。
//        var_dump($ar);
        // array(2) {
        //  [0]=>
        //  array(7) {
        //    [0]=>
        //    string(2) "10"
        //    [1]=>
        //    int(100)
        //    [2]=>
        //    int(100)
        //    [3]=>
        //    int(11)
        //    [4]=>
        //    string(1) "a"
        //    [5]=>
        //    string(1) "b"
        //    [6]=>
        //    string(1) "c"
        //  }
        //  [1]=>
        //  array(7) {
        //    [0]=>
        //    int(1)
        //    [1]=>
        //    int(3)
        //    [2]=>
        //    string(1) "2"
        //    [3]=>
        //    int(2)
        //    [4]=>
        //    int(1)
        //    [5]=>
        //    int(10)
        //    [6]=>
        //    int(11)
        //  }
        //}

        // 对数据库结果进行排序
//        $data[] = array('volume' => 67, 'edition' => 2);
//        $data[] = array('volume' => 86, 'edition' => 1);
//        $data[] = array('volume' => 85, 'edition' => 6);
//        $data[] = array('volume' => 98, 'edition' => 2);
//        $data[] = array('volume' => 86, 'edition' => 6);
//        $data[] = array('volume' => 67, 'edition' => 7);
//
//        // 取得列的列表
//        $volume = [];
//        $edition = [];
//        foreach ($data as $key => $row) {
//            $volume[$key] = $row['volume'];
//            $edition[$key] = $row['edition'];
//        }
//
//        // 将数据根据 volume 降序排列，根据 edition 升序排列
//        // 把 $data 作为最后一个参数，以通用键排序
//        array_multisort($volume, SORT_DESC, $edition, SORT_ASC, $data);
//        print_r($data);
        //Array
        //(
        //    [0] => Array
        //        (
        //            [volume] => 98
        //            [edition] => 2
        //        )
        //
        //    [1] => Array
        //        (
        //            [volume] => 86
        //            [edition] => 1
        //        )
        //
        //    [2] => Array
        //        (
        //            [volume] => 86
        //            [edition] => 6
        //        )
        //
        //    [3] => Array
        //        (
        //            [volume] => 85
        //            [edition] => 6
        //        )
        //
        //    [4] => Array
        //        (
        //            [volume] => 67
        //            [edition] => 2
        //        )
        //
        //    [5] => Array
        //        (
        //            [volume] => 67
        //            [edition] => 7
        //        )
        //
        //)

        // 不区分大小写字母排序,SORT_STRING 和 SORT_REGULAR 都是区分大小写字母的，大写字母会排在小写字母之前
        // 要进行不区分大小写的排序，就要按照原数组的小写字母拷贝来排序
//        $array = array('Alpha', 'atomic', 'Beta', 'bank');
//        $array_lowercase = array_map('strtolower', $array);
//        print_r($array_lowercase); // Array ( [0] => alpha [1] => atomic [2] => beta [3] => bank )
//        array_multisort($array_lowercase, SORT_ASC, SORT_STRING, $array);
//        print_r($array); // 结果 Array ( [0] => Alpha [1] => atomic [2] => bank [3] => Beta )

        // 具体排序的一个例子
//        $grade = [
//            "score" => [70, 95, 70.0, 60, "70"],
//            "name" => ["Zhang San", "Li Si", "Wang Wu", "Zhao Liu", "Liu Qi"]
//        ];
//        array_multisort($grade["score"], SORT_NUMERIC, SORT_DESC,
//            // 将分数作为数值，由高到低排序
//            $grade["name"], SORT_STRING, SORT_ASC);
//        // 将名字作为字符串，由小到大排序
//        var_dump($grade);
        // array(2) {
        //  ["score"]=>
        //  array(5) {
        //    [0]=>
        //    int(95)
        //    [1]=>
        //    string(2) "70"
        //    [2]=>
        //    float(70)
        //    [3]=>
        //    int(70)
        //    [4]=>
        //    int(60)
        //  }
        //  ["name"]=>
        //  array(5) {
        //    [0]=>
        //    string(5) "Li Si"
        //    [1]=>
        //    string(6) "Liu Qi"
        //    [2]=>
        //    string(7) "Wang Wu"
        //    [3]=>
        //    string(9) "Zhang San"
        //    [4]=>
        //    string(8) "Zhao Liu"
        //  }
        //}

    }

    /**
     * 列
     * array_column — 返回数组中指定的一列
     */
    public function column_fun()
    {
        /**
         * array_column — 返回数组中指定的一列
         * array array_column( array $input, mixed $column_key[, mixed $index_key] )
         * array_column() 返回input数组中键值为column_key的列，如果指定了可选参数index_key，
         * 那么input数组中的这一列的值将作为返回数组中对应值的键。
         * @param input 需要取出数组列的多维数组（或结果集）
         * @param column_key 需要返回值的列，它可以是索引数组的列索引，或者是关联数组的列的键。
         * 也可以是NULL，此时将返回整个数组（配合index_key参数来重置数组键的时候，非常管用）
         * @param index_key 作为返回数组的索引/键的列，它可以是该列的整数索引，或者字符串键值
         * @return 从多维数组中返回单列数组(只能是单列)
         */
        $a = [
            [
                'id' => 1,
                'name' => 'first'
            ],
            [
                'id' => 2,
                'name' => 'second'
            ]
        ];
        // 不指定列，不指定$index_key,就是原数组
//        $result = array_column($a,null);
//        print_r($result);

        // 指定列,不指定$index_key
//        $result = array_column($a, 'name');
//        print_r($result); // 结果 Array ( [0] => first [1] => second )

        // 指定列，指定$index_key，如果$index_key不存在,则为索引数组
//        $result = array_column($a, 'name', 'id');
//        print_r($result); // 结果 Array ( [1] => first [2] => second )

        // 不指定列，指定$index_key
//        $result = array_column($a, null, 'id');
//        print_r($result); // 结果 Array ( [1] => Array ( [id] => 1 [name] => first ) [2] => Array ( [id] => 2 [name] => second ) )

    }


    /**
     * 计算
     * array_sum — 计算数组中所有值的和
     * array_merge — 合并一个或多个数组
     * array_merge_recursive — 递归地合并一个或多个数组
     * array_count_values — 统计数组中所有的值出现的次数
     * count — 计算数组中的单元数目或对象中的属性个数
     * array_product — 计算数组中所有值的乘积
     */
    public function calculate_fun()
    {
        /**
         * array_sum — 计算数组中所有值的和
         * number array_sum( array $array)
         * array_sum() 将数组中的所有值的和以整数或浮点数的结果返回。
         * @input array 输入的数组
         * @return number 所有值的和以整数或浮点数的结果返回
         */
//        // 整数
//        $a = [1, 2, 3, 4, 5];
//        $result = array_sum($a);
//        print_r($result); // 结果 15

        // 浮点数
//        $a = [1.25, 2.14, 3.12, 4.87, 5.34];
//        $result = array_sum($a);
//        print_r($result); // 结果 16.72

        /**
         * array_merge — 合并一个或多个数组
         * array array_merge( array $array1[, array $...] )
         * array_merge()
         *  将一个或多个数组的单元合并起来，一个数组中的值附加在前一个数组的后面。返回作为结果的数组
         *  如果输入的数组中有相同的字符串键名，则该键名后面的值将覆盖前一个值。然而，如果数组包含数字键名，后面的值将不会覆盖原来的值，而是附加到后面。
         *  如果只给了一个数组并且该数组是数字索引的，则键名会以连续方式重新索引。
         */
        // 如果数组包含数字键名，后面的值将不会覆盖原来的值，而是附加到后面
//        $a = ['name' => '张三', 'age' => 18, 'info' => ['测试', '年龄']];
//        $b = ['address' => '山东', 'name' => '李四'];
//        $result = array_merge($a, $b);
//        print_r($result); // 结果 Array ( [name] => 李四 [age] => 18 [info] => Array ( [0] => 测试 [1] => 年龄 ) [address] => 山东 )

        // 如果只给了一个数组并且该数组是数字索引的，则键名会以连续方式重新索引。注意array_values也会重新索引数组
//        $a = [4 => 1, 5 => 2];
//        $result = array_merge($a);
//        print_r($result); // 结果 Array ( [0] => 1 [1] => 2 )

        /**
         * array_merge_recursive — 递归地合并一个或多个数组
         * array array_merge_recursive( array $array1[, array $...] )
         * array_merge_recursive() 将一个或多个数组的单元合并起来，一个数组中的值附加在前一个数组的后面。返回作为结果的数组。
         * 如果输入的数组中有相同的字符串键名，则这些值会被合并到一个数组中去，这将递归下去，
         * 因此如果一个值本身是一个数组，本函数将按照相应的条目把它合并为另一个数组。
         * 然而，如果数组具有相同的数组键名，后一个值将不会覆盖原来的值，而是附加到后面。
         */
        // 多个数组
//        $a = ['name' => '张三', 'age' => 18, 'info' => ['测试', '年龄']];
//        $b = ['address' => '山东', 'name' => '李四', 'age' => 25];
//        $result = array_merge_recursive($a, $b);
//        print_r($result); // 结果 Array ( [name] => Array ( [0] => 张三 [1] => 李四 ) [age] => Array ( [0] => 18 [1] => 25 ) [info] => Array ( [0] => 测试 [1] => 年龄 ) [address] => 山东 )

        // 只有一个数组,不会重新索引数组
//        $a = ['name' => '张三', 'age' => 18, 'info' => ['测试', '年龄']];
//        $result = array_merge_recursive($a);
//        print_r($result); // 结果 Array ( [name] => 张三 [age] => 18 [info] => Array ( [0] => 测试 [1] => 年龄 ) )

        /**
         * array_count_values — 统计数组中所有的值出现的次数
         * array array_count_values( array $input)
         * array_count_values() 返回一个数组，该数组用 input 数组中的值作为键名，该值在 input 数组中出现的次数作为值。
         * input 统计这个数组的值
         * 返回一个关联数组，用 input 数组中的值作为键名，该值在数组中出现的次数作为值
         * 注意 对数组里面的每个不是 string 和 integer 类型的元素抛出一个警告错误（E_WARNING）。
         * Warning: array_count_values(): Can only count STRING and INTEGER values!
         */
//        $array = array(1, "hello", 1, "world", "hello");
//        $result = array_count_values($array);
//        print_r($result); // 结果 Array ( [1] => 2 [hello] => 2 [world] => 1 )

        /**
         * sizeof-count的别名
         * count — 计算数组中的单元数目或对象中的属性个数
         * int count( mixed $var[, int $mode = COUNT_NORMAL] )
         * 统计一个数组里的所有元素，或者一个对象里的东西。
         * @param mixed var数组或者对象。
         * @param int mode 如果可选的 mode 参数设为 COUNT_RECURSIVE（或 1），count() 将递归地对数组计数。
         * 对计算多维数组的所有单元尤其有用。mode 的默认值是 0。count() 识别不了无限递归。
         * @return int 返回var 中的单元数目。如果 var 不是数组类型或者实现了 Countable 接口的对象，将返回 1，有一个例外，如果 var 是 NULL 则结果是 0。
         * count() 对没有初始化的变量返回 0，但对于空的数组也会返回 0。用 isset() 来测试变量是否已经初始化。
         *
         */
        // 正常统计
//        $a = [1, 2, 3, 4, 5, null];
//        $result = count($a);
//        print_r($result); // 结果 6

        // 递归的统计
//        $a = [
//            'color' => ['red', 'green', 'blue'],
//            'size' => ['大', '中', '小', 'arr' => [1, 2, 3]],
//        ];
//        $result = count($a, COUNT_RECURSIVE);
//        print_r($result); // 结果 12 可以看出是包含每一层级的所有单元个数

        /**
         * array_product — 计算数组中所有值的乘积
         * number array_product( array $array)
         * array_product() 以整数或浮点数返回一个数组中所有值的乘积。
         * array 这个数组。
         * @return number 以整数或浮点数返回一个数组中所有值的乘积。
         */
        // 整数
//        $a = array(2, 4, 6, 8);
//        $result = array_product($a);
//        echo $result; // 结果 384
        // 浮点数
//        $a = [1.31, 1.25, 1.78];
//        $result = array_product($a);
//        echo $result; // 结果 2.91475

    }

    /**
     * 交集和差集
     * array_diff — 计算数组的差集
     * array_intersect — 计算数组的交集
     */
    public function diff_intersect()
    {
        /**
         * array_diff — 计算数组的差集
         * array array_diff( array $array1, array $array2[, array $...] )
         * 对比返回在 array1 中但是不在 array2 及任何其它参数数组中的值
         * @param array1 要被对比的数组
         * @param array2 和这个数组进行比较
         *      ......
         * 返回一个数组，该数组包括了所有在 array1 中但是不在任何其它参数数组中的值。注意键名保留不变。
         */
        // 两个数组做比较
//        $array1 = ["a" => "green", "red", "blue", "red"];
//        $array2 = ["b" => "green", "yellow", "red"];
//        $result = array_diff($array1, $array2);
//        print_r($result); // 结果 Array ( [1] => blue )
        // 三个数组做比较
//        $array1 = [1, 4, 5];
//        $array2 = [1, 7];
//        $array3 = [4, 9, 10];
//        $result = array_diff($array1, $array2, $array3);
//        print_r($result); // 结果 Array ( [2] => 5 )

        /**
         * array_diff_assoc — 带索引检查计算数组的差集
         * array array_diff_assoc( array $array1, array $array2[, array $...] )
         * array_diff_assoc() 返回一个数组，该数组包括了所有在 array1 中但是不在任何其它参数数组中的值。注意和 array_diff() 不同的是键名也用于比较
         * 键名也比较,注意这里不管是关联索引还是数字索引，都会比较
         */
//        $array1 = ["a" => "green", "b" => "brown", "c" => "blue", "red"];
//        $array2 = ["a" => "green", "yellow", "red"];
//        $result = array_diff_assoc($array1, $array2);
//        print_r($result); // 结果 Array ( [b] => brown [c] => blue [0] => red )

        /**
         * array_diff_key — 使用键名比较计算数组的差集
         * array array_diff_key( array $array1, array $array2[, array $...] )
         * 根据 array1 中的键名和 array2 进行比较，返回不同键名的项。本函数和 array_diff() 相同只除了比较是根据键名而不是值来进行的。
         * array_diff_key() 返回一个数组，该数组包括了所有出现在 array1 中但是未出现在任何其它参数数组中的键名的值
         */
//        $array1 = ['blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4];
//        $array2 = ['green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8];
//        $result = array_diff_key($array1, $array2);
//        print_r($result); // Array ( [red] => 2 [purple] => 4 )

        /**
         * array_diff_uassoc — 用用户提供的回调函数做索引检查来计算数组的差集[没研究透]
         * array array_diff_uassoc( array $array1, array $array2[, array $...], callable $key_compare_func)
         * 对比了 array1 和 array2 并返回不同之处。注意和 array_diff() 不同的是键名也用于比较。
         * 和 array_diff_assoc() 不同的是使用了用户自定义的回调函数，而不是内置的函数。
         * array1 待比较的数组
         * array2 和这个数组进行比较
         * ...
         * 更多比较的数组
         * key_compare_func 在第一个参数小于，等于或大于第二个参数时，该比较函数必须相应地返回一个小于，等于或大于 0 的整数。
         * int callback ( mixed $a, mixed $b )
         * 返回一个 array，该数组包括了所有在 array1 中但是不在任何其它参数数组中的值。
         * 参数 key_compare_func 是用户自定义的用来比较两个数组的函数，该函数必须带有两个参数 - 即两个要进行对比的键名。
         * 因此与函数 array_diff_assoc() 的行为正好相反，后者是用内部函数进行比较的。
         */
//        $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
//        $array2 = array("a" => "green", "yellow", "red");
//        $result = array_diff_uassoc($array1, $array2, function ($a, $b) {
//            if ($a === $b) {
//                return 0;
//            }
//            return ($a > $b) ? 1 : -1;
//        });
//        print_r($result); // 结果 Array ( [b] => brown [c] => blue [0] => red )

        /**
         * array_diff_ukey — 用回调函数对键名比较计算数组的差集
         * array array_diff_ukey( array $array1, array $array2[, array $ ...], callable $key_compare_func)
         * array_diff_ukey() 返回一个数组，该数组包括了所有出现在 array1 中但是未出现在任何其它参数数组中的键名的值。注意关联关系保留不变。本函数和 array_diff() 相同只除了比较是根据键名而不是值来进行的。
         * 此比较是通过用户提供的回调函数来进行的。如果认为第一个参数小于，等于，或大于第二个参数时必须分别返回一个小于零，等于零，或大于零的整数。
         */
//        $array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
//        $array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8);
//        $result = array_diff_ukey($array1, $array2, function ($key1, $key2) {
//            if ($key1 == $key2)
//                return 0;
//            else if ($key1 > $key2)
//                return 1;
//            else
//                return -1;
//        });
//        print_r($result); // 结果 Array ( [red] => 2 [purple] => 4 )

        /**
         * array_udiff_assoc
         */










        /**
         * array_intersect — 计算数组的交集
         * array array_intersect( array $array1, array $array2[, array $ ...] )
         * array_intersect() 返回一个数组，该数组包含了所有在 array1 中也同时出现在所有其它参数数组中的值。注意键名保留不变。
         * @return array 返回一个数组，该数组包含了所有在 array1 中也同时出现在所有其它参数数组中的值
         */
//        $array1 = [1, 3, 5];
//        $array2 = [2, 5, 8];
//        $array3 = [3, 5, 10, 12];
//        $result = array_intersect($array1, $array2, $array3);
//        print_r($result); // 结果 Array ( [2] => 5 )


        /**
         * array_intersect_key
         */

    }

    /**
     * 指针
     * current — 返回数组中的当前单元
     * pos-current的别名
     * key — 从关联数组中取得键名
     * next — 将数组中的内部指针向前移动一位
     * prev — 将数组的内部指针倒回一位
     * end — 将数组的内部指针指向最后一个单元
     * reset — 将数组的内部指针指向第一个单元
     * list — 把数组中的值赋给一些变量
     */
    public function pointer_fun()
    {
        /**
         * current — 返回数组中的当前单元
         * mixed current( array &$array)
         * 每个数组中都有一个内部的指针指向它"当前的"单元，初始指向插入到数组中的第一个单元
         * @param array 这个数组
         * current() 函数返回当前被内部指针指向的数组单元的值，并不移动指针。如果内部指针指向超出了单元列表的末端，current() 返回 FALSE
         * 应使用 === 运算符来测试此函数的返回值
         */
//        $a = [1, 2, 3, 4, 5];
//        $result = current($a);
//        print_r($result); // 结果 1 当前指针在1，并不移动

        /**
         * pos-current的别名
         */
//        $a = [1, 2, 3, 4, 5];
//        $result = pos($a);
//        print_r($result); // 结果 1 当前指针在1，并不移动

        /**
         * key — 从关联数组中取得键名
         * mixed key( array &$array)
         * key() 返回数组中当前单元的键名。
         * @param array
         * @return mixed key() 函数返回数组中内部指针指向的当前单元的键名。但它不会移动指针。
         * 如果内部指针超过了元素列表尾部，或者数组是空的，key() 会返回 NULL。
         */
//        $a = [1, 2, 3, 4, 5];
//        $result = key($a);
//        print_r($result); // 结果 0 当前指针在1，并不移动

        /**
         * next — 将数组中的内部指针向前移动一位
         * mixed next( array &$array)
         * next() 和 current() 的行为类似，只有一点区别，在返回值之前将内部指针向前移动一位。这意味着它返回的是下一个数组单元的值并将数组指针向前移动了一位
         * 返回数组内部指针指向的下一个单元的值，或当没有更多单元时返回 FALSE。 应使用 === 运算符来测试此函数的返回值
         */
//        $a = [1, 2, 3, 4, 5];
//        $result = next($a);
//        print_r($result); // 结果 2
        /**
         * prev — 将数组的内部指针倒回一位
         * mixed prev( array &$array)
         * prev() 和 next() 的行为类似，只除了它将内部指针倒回一位而不是前移一位。
         */
//        $result = prev($a);
//        print_r($result); // 结果 1

        /**
         * end — 将数组的内部指针指向最后一个单元
         * mixed end( array &$array)
         * end() 将 array 的内部指针移动到最后一个单元并返回其值
         * @param array 这个数组。该数组是通过引用传递的，因为它会被这个函数修改。这意味着你必须传入一个真正的变量，而不是函数返回的数组，因为只有真正的变量才能以引用传递。
         * @return mixed 返回最后一个元素的值，或者如果是空数组则返回 FALSE。
         */
//        $a = [1, 2, 3, 4, 5];
//        $result = end($a);
//        print_r($result); // 结果 5
        /**
         * reset — 将数组的内部指针指向第一个单元
         * mixed reset( array &$array)
         * reset() 将 array 的内部指针倒回到第一个单元并返回第一个数组单元的值。
         * @return mixed 返回数组第一个单元的值，如果数组为空则返回 FALSE。
         */
//        $result = reset($a);
//        print_r($result); // 结果 1

        /**
         * PHP从7.2开始已经删掉了each
         * each — 返回数组中当前的键／值对并将数组指针向前移动一步
         * array each( array &$array)
         * 返回数组中当前的键／值对并将数组指针向前移动一步
         * 在执行 each() 之后，数组指针将停留在数组中的下一个单元或者当碰到数组结尾时停留在最后一个单元。
         * 如果要再用 each 遍历数组，必须使用 reset()。
         * 返回 array 数组中当前指针位置的键／值对并向前移动数组指针。
         * 键值对被返回为四个单元的数组，键名为0，1，key和 value。单元 0 和 key 包含有数组单元的键名，1 和 value 包含有数据。
         * 如果内部指针越过了数组的末端，则 each() 返回 FALSE。
         */


        /**
         * list — 把数组中的值赋给一些变量
         * array list( mixed $varname[, mixed $...] )
         * 像 array() 一样，这不是真正的函数，而是语言结构。list() 用一步操作给一组变量进行赋值。
         * @return array 返回指定的数组。
         */
//        $a = [1, 2, 3];
//        list($v1, $v2, $v3) = $a;
//        print_r($v1); // 结果 1
//        print_r($v2); // 结果 2
//        print_r($v3); // 结果 3


    }

    /**
     * 其他常用的函数
     * array_unique — 移除数组中重复的值
     * array_reverse — 返回一个单元顺序相反的数组
     * shuffle — 将数组打乱
     * array_rand — 从数组中随机取出一个或多个单元
     * array_combine — 创建一个数组，用一个数组的值作为其键名，另一个数组的值作为其值
     * array_change_key_case — 返回字符串键名全为小写或大写的数组
     * array_replace — 使用传递的数组替换第一个数组的元素
     * array_replace_recursive — 使用传递的数组递归替换第一个数组的元素
     */
    public function other()
    {
        /**
         * array_unique — 移除数组中重复的值
         * array array_unique( array $array[, int $sort_flags = SORT_STRING] )
         * array_unique() 接受 array 作为输入并返回没有重复值的新数组。
         * 注意键名保留不变。array_unique() 先将值作为字符串排序，然后对每个值只保留第一个遇到的键名，接着忽略所有后面的键名。
         * 这并不意味着在未排序的 array 中同一个值的第一个出现的键名会被保留。
         * 当且仅当 (string) $elem1 === (string) $elem2 时两个单元被认为相同。就是说，当字符串的表达一样时。 第一个单元将被保留。
         * @param array 输入的数组
         * @param sort_flags
         * ◦ SORT_REGULAR - 正常比较(不改变类型)
         * ◦ SORT_NUMERIC - 以数字的形式比较
         * ◦ SORT_STRING - 以字符串的形式比较(默认值)
         * ◦ SORT_LOCALE_STRING - 根据当前的区域（locale）设置来把单元当作字符串比较(基本不用)
         * @return array 返回去重后的数组
         */
        // SORT_REGULAR - 正常比较(不改变类型)
//        $a = ["a" => "green", "red", "b" => "green", "blue", "red", 1, '1'];
//        $result = array_unique($a,SORT_REGULAR);
//        print_r($result); // 结果 Array ( [a] => green [0] => red [1] => blue [3] => 1 )

        // SORT_NUMERIC - 以数字的形式比较
//        $a = ["a" => "green", "red", "b" => "green", "blue", "red", 1, '1'];
//        $result = array_unique($a, SORT_NUMERIC);
//        print_r($result); // 结果 Array ( [a] => green [3] => 1 )

//        $a = ["a" => "1", "1", "2" => "2", "3", "4", 5, '6'];
//        $result = array_unique($a, SORT_NUMERIC);
//        print_r($result); // 结果 Array ( [a] => 1 [2] => 2 [3] => 3 [4] => 4 [5] => 5 [6] => 6 )

        // SORT_STRING - 以字符串的形式比较
//        $a = ["a" => "green", "red", "b" => "green", "blue", "red", 1, '1'];
//        $result = array_unique($a, SORT_STRING);
//        print_r($result); // 结果 Array ( [a] => green [0] => red [1] => blue [3] => 1 )

        /**
         * array_reverse — 返回一个单元顺序相反的数组
         * array array_reverse( array $array[, bool $preserve_keys = false] )
         * array_reverse() 接受数组 array 作为输入并返回一个单元为相反顺序的新数组。
         * @param array 输入的数组。
         * @param bool preserve_keys 如果设置为 TRUE 会保留数字的键。非数字的键则不受这个设置的影响，总是会被保留。
         */
//        $a = [1, 2, '张三', 3, '李四', 4, 5];
//        $result = array_reverse($a);
//        print_r($result); // 结果 Array ( [0] => 5 [1] => 4 [2] => 李四 [3] => 3 [4] => 张三 [5] => 2 [6] => 1 )

        // 设置第二个参数,保留key
//        $a = [1, 2, '张三', 3, '李四', 4, 5];
//        $result = array_reverse($a,true);
//        print_r($result); // 结果 Array ( [6] => 5 [5] => 4 [4] => 李四 [3] => 3 [2] => 张三 [1] => 2 [0] => 1 )

        /**
         * shuffle — 将数组打乱
         * bool shuffle( array &$array)
         * 成功时返回 TRUE， 或者在失败时返回 FALSE。
         */
//        $a = [1, 2, 3, 4, 5];
//        $result = shuffle($a);
//        print_r($a); // 结果 随机的

        /**
         * array_rand — 从数组中随机取出一个或多个单元
         * mixed array_rand( array $input[, int $num_req = 1] )
         * 从数组中取出一个或多个随机的单元，并返回随机条目的一个或多个键。
         * @param array input 输入的数组。
         * @param int num_req 指明了你想取出多少个单元。如果指定的数目超过了数组里的数量将会产生一个 E_WARNING 级别的错误。
         * @return mixed 如果你只取出一个，array_rand() 返回一个随机单元的键名，否则就返回一个包含随机键名的数组。这样你就可以随机从数组中取出键名和值。
         */
        $a = [1, 2, 3, 4, 5];
        // 只取出一个
//        $result = array_rand($a);
//        print_r($result); // 结果，随机一个值,如5

        // 取出多个
//        $result = array_rand($a,2);
//        print_r($result); // 结果，随机一个数组,如Array ( [0] => 2 [1] => 4 )

        /**
         * 合并数组有array_merge_recursive，array_merge，array_combine
         * array_combine — 创建一个数组，用一个数组的值作为其键名，另一个数组的值作为其值
         * array array_combine( array $keys, array $values)
         * 返回一个 array，用来自 keys 数组的值作为键名，来自 values 数组的值作为相应的值。
         * keys 将被作为新数组的键。非法的值将会被转换为字符串类型（string）。
         * values 将被作为数组的值。
         * @return array 返回合并的 array，如果两个数组的单元数不同则返回 FALSE。
         * 发出警告 Warning: array_combine(): Both parameters should have an equal number of elements
         */
//        $a = [1, 2, 3, 4, 5];
//        $b = ['one', 'two', 'three', 'four', 'five'];
//        $result = array_combine($a, $b);
//        print_r($result); // 结果 Array ( [1] => one [2] => two [3] => three [4] => four [5] => five )

        /**
         * array_change_key_case — 返回字符串键名全为小写或大写的数组
         * array array_change_key_case( array $input[, int $case = CASE_LOWER] )
         * array_change_key_case() 将 input 数组中的所有键名改为全小写或大写。改变是根据后一个选项 case 参数来进行的。本函数不改变数字索引
         * input 需要操作的数组。
         * case 可以在这里用两个常量，CASE_UPPER 或 CASE_LOWER（默认值）。
         * @return array 返回一个键全是小写或者全是大写的数组；如果输入值（input）不是一个数组，那么返回FALSE
         */
        // 对数字索引无效
//        $a = [1, 2, 3, 4, 5];
//        $result = array_change_key_case($a,CASE_UPPER);
//        print_r($result); // 结果 Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
        // 关联索引
//        $a = ['one' => 1, 'two' => 2, 3, 4, 5];
//        $result = array_change_key_case($a, CASE_UPPER);
//        print_r($result); // 结果 Array ( [ONE] => 1 [TWO] => 2 [0] => 3 [1] => 4 [2] => 5 )

        /**
         * array_replace — 使用传递的数组替换第一个数组的元素
         * array array_replace( array $array1, array $array2[, array $...] )
         * array_replace() 函数使用后面数组元素相同 key 的值替换 array1 数组的值。如果一个键存在于第一个数组同时也存在于第二个数组，它的值将被第二个数组中的值替换。如果一个键存在于第二个数组，但是不存在于第一个数组，则会在第一个数组中创建这个元素。如果一个键仅存在于第一个数组，它将保持不变。如果传递了多个替换数组，它们将被按顺序依次处理，后面的数组将覆盖之前的值。
         * array_replace() 是非递归的：它将第一个数组的值进行替换而不管第二个数组中是什么类型。
         * array1 替换该数组的值。
         * array2 从此数组中提取替换值。
         * ...
         * 包含要提取元素的更多数组。后面的数组里的值会覆盖前面的值。
         * 返回一个数组。如果发生错误，将返回 NULL。
         */
//        $base = ["orange", "banana", "apple", "raspberry"];
//        $replacements = [0 => "pineapple", 4 => "cherry"];
//        $replacements2 = [0 => "grape"];
//
//        $basket = array_replace($base, $replacements, $replacements2);
//        print_r($basket); // 结果 Array ( [0] => grape [1] => banana [2] => apple [3] => raspberry [4] => cherry )

        /**
         * array_replace_recursive — 使用传递的数组递归替换第一个数组的元素
         * array array_replace_recursive( array $array1, array $array2[, array $...] )
         * array_replace_recursive() 使用后面数组元素的值替换数组 array1 的值。如果一个键存在于第一个数组同时也存在于第二个数组，它的值将被第二个数组中的值替换。
         * 如果一个键存在于第二个数组，但是不存在于第一个数组，则会在第一个数组中创建这个元素。如果一个键仅存在于第一个数组，它将保持不变。如果传递了多个替换数组，它们将被按顺序依次处理，后面的数组将覆盖之前的值。
         * array_replace_recursive() 是递归的：它将遍历数组并将相同的处理应用到数组的内部值。
         * 如果数组 array1 中的值是标量，它的值将被第二个数组 array2 中的值替换，它可能是一个标量或者数组。如果 array1 和 array2 中的值都是数组，array_replace_recursive() 函数将递归地替换它们各自的值。
         * @param
         * array1 替换该数组的值。
         * array2 从此数组中提取替换值。
         * ...
         * 可选项。更多包含要提取元素的数组。
         * 返回一个数组。如果发生错误，将返回 NULL
         */
//        $base = ['citrus' => ["orange"], 'berries' => ["blackberry", "raspberry"]];
//        $replacements = ['citrus' => ['pineapple'], 'berries' => ['blueberry']];
//        $basket = array_replace_recursive($base, $replacements);
//        print_r($basket); // 结果 Array ( [citrus] => Array ( [0] => pineapple ) [berries] => Array ( [0] => blueberry [1] => raspberry ) )

    }

}
