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
//        $this->key_value();
//        $this->array_var();
//        $this->frag_fit();
//        $this->push_pop();
//        $this->shift_unshift();

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
    

}
