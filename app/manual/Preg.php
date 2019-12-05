<?php

namespace app\manual;

use app\interfaces\Base;

class Preg implements Base{

    public function index()
    {
        /**
         *  //应用于数组
         *  array preg_grep( string $pattern, array $input[, int $flags = 0] )
         *      返回给定数组input中与模式pattern 匹配的元素组成的数组.
         *      pattern
                    要搜索的模式, 字符串形式.
                input
                    输入数组.
                flags
         *          默认是返回匹配的
                    如果设置为PREG_GREP_INVERT(或者1), 这个函数返回输入数组中与给定模式pattern不匹配的元素组成的数组.
         */
//        $arr = [23.21,24,14,3.13,3432];
//        $pattern = "/^2/";
//        $result = preg_grep($pattern,$arr,PREG_GREP_INVERT);
//        var_dump($result);
        /**
         *  //应用于字符串,搜索到就会停止搜索，也就是说只会搜索一次
         *  int preg_match( string $pattern, string $subject[, array &$matches[, int $flags = 0[, int $offset = 0]]] )
         *      搜索subject与pattern给定的正则表达式的一个匹配.
         *      返回值:preg_match()返回 pattern 的匹配次数。它的值将是0次（不匹配）或1次，因为preg_match()在第一次匹配后将会停止搜索。preg_match_all()不同于此，它会一直搜索subject 直到到达结尾。如果发生错误preg_match()返回 FALSE。
         *      pattern
                    要搜索的模式，字符串类型。
                subject
                    输入字符串。
                matches
                    如果提供了参数matches，它将被填充为搜索结果。 $matches[0]将包含完整模式匹配到的文本， $matches[1] 将包含第一个捕获子组匹配到的文本，以此类推。
         *      flags
                    flags可以被设置为以下标记值：
                    PREG_OFFSET_CAPTURE如果传递了这个标记，对于每一个出现的匹配返回时会附加字符串偏移量(相对于目标字符串的)。注意：这会改变填充到matches参数的数组，使其每个元素成为一个由第0个元素是匹配到的字符串，第1个元素是该匹配字符串在目标字符串subject中的偏移量。
                array (size=3)
                    0 =>
                        array (size=2)
                            0 => string 'test' (length=4)
                            1 => int 10
                    1 =>
                        array (size=2)
                            0 => string 'te' (length=2)
                            1 => int 10
                    2 =>
                        array (size=2)
                            0 => string 'st' (length=2)
                            1 => int 12
         *      offset
                    通常，搜索从目标字符串的开始位置开始。可选参数 offset 用于指定从目标字符串的某个未知开始搜索(单位是字节)。
         */
//        $str = 'this is a test,there are too many people';
//        $pattern = "/(te)+(st)*/";
//        $result = preg_match($pattern,$str,$matches,PREG_OFFSET_CAPTURE,10);
//        var_dump($result);
//        var_dump($matches);
        /**
         *  int preg_match_all( string $pattern, string $subject[, array &$matches[, int $flags = PREG_PATTERN_ORDER[, int $offset = 0]]] )
         *      搜索subject中所有匹配pattern给定正则表达式的匹配结果并且将它们以flag指定顺序输出到matches中.
                在第一个匹配找到后, 子序列继续从最后一次匹配位置搜索.
         *      pattern
                    要搜索的模式，字符串形式。
                subject
                    输入字符串。
                matches
                    多维数组，作为输出参数输出所有匹配结果, 数组排序通过flags指定。
                flags
                    可以结合下面标记使用(注意不能同时使用PREG_PATTERN_ORDER和 PREG_SET_ORDER)：
                    PREG_PATTERN_ORDER
                        结果排序为$matches[0]保存完整模式的所有匹配, $matches[1] 保存第一个子组的所有匹配，以此类推。
                    PREG_SET_ORDER
                        结果排序为$matches[0]包含第一次匹配得到的所有匹配(包含子组)， $matches[1]是包含第二次匹配到的所有匹配(包含子组)的数组，以此类推。
                    PREG_OFFSET_CAPTURE
                        如果这个标记被传递，每个发现的匹配返回时会增加它相对目标字符串的偏移量。注意这会改变matches中的每一个匹配结果字符串元素，使其成为一个第0个元素为匹配结果字符串，第1个元素为匹配结果字符串在subject中的偏移量。
                offset
                    通常， 查找时从目标字符串的开始位置开始。可选参数offset用于从目标字符串中指定位置开始搜索(单位是字节)。
         */
//        $str = "this is test ,there are test many last";
//        $pattern = "/(te)+(st)*/";
//        $result = preg_match_all($pattern,$str,$matches,PREG_OFFSET_CAPTURE,5);
//        var_dump($result);
//        var_dump($matches);
        /**
         *  数组或者字符串，如果$subject是数组就是数组，如果$subject是字符串就是字符串
         *  mixed preg_replace( mixed $pattern, mixed $replacement, mixed $subject[, int $limit = -1[, int &$count]] )
         *      搜索subject中匹配pattern的部分，以replacement进行替换。
         *      如果subject是一个数组， preg_replace()返回一个数组，其他情况下返回一个字符串。
                如果匹配被查找到，替换后的subject被返回，其他情况下返回没有改变的 subject。如果发生错误，返回 NULL 。
         */
//        //都是字符串的情况下
//        $pattern = "/t/";
//        $replace = '替换';
//        $subject = 'this t is t';
//        $result = preg_replace($pattern,$replace,$subject);
//        var_dump($result);
        //都是数组的情况下
//        $pattern = [
//          "/t/","/m/"
//        ];
//        $replace = [
//            '替换','膜拜'
//        ];
//        $subject = [
//            't大幅度m',
//            'm发大幅度是',
//        ];
//        $result = preg_replace($pattern,$replace,$subject);
//        var_dump($result);
        //有数组有字符串
//        $pattern = [
//          "/t/","/m/"
//        ];
//        $replace = '空';
//        $subject = [
//            't大幅度m',
//            'm发大幅度是m',
//        ];
//        $result = preg_replace($pattern,$replace,$subject,-1,$count); //这里的limit是每个模式的替换次数,$count是替换的总次数
//        var_dump($result);
//        var_dump($count);
        /**
         *  字符串函数explode的高级PCRE版
         *  array preg_split( string $pattern, string $subject[, int $limit = -1[, int $flags = 0]] )
         *      通过一个正则表达式分隔给定字符串.
         *      返回一个使用 pattern 边界分隔 subject 后得到的子串组成的数组。
         */
//        $pattern = "/@|,|^/";
//        $str = 'thsfkdks@kfd^skfskd@kfsdk,fsdk@';
//        $result = preg_split($pattern,$str,-1,PREG_SPLIT_NO_EMPTY);
//        var_dump($result);
        /**
         *  mixed preg_filter( mixed $pattern, mixed $replacement, mixed $subject[, int $limit = -1[, int &$count]] )
         *  preg_filter()等价于preg_replace() 除了它仅仅返回(可能经过转化)与目标匹配的结果. 这个函数怎样工作的更详细信息请阅读 preg_replace()文档.
         *  执行一个正则表达式搜索和替换
         *  如果subject是一个数组，返回一个数组，其他情况返回一个字符串。
            如果没有找到匹配或者发生了错误，当subject是数组时返回一个空数组，其他情况返回NULL。
         */
//        $pattern = [
//          "/t/","/m/"
//        ];
//        $replace = '空';
//        $subject = [
//            't大幅度m',
//            'm发大幅度是m',
//        ];
//        $result = preg_filter($pattern,$replace,$subject);
//        var_dump($result);

        /**
         *  preg_filter和preg_replace的区别是
         *  如果有没有匹配到pattern中所有的模式，那么该项preg_filter不返回，preg_replace返回
         */
//        $subject = array('1', 'a', '2', 'b', '3', 'A', 'B', '4');
//        $pattern = array('/\d/', '/[a-z]/', '/[1a]/');
//        $replace = array('A:$0', 'B:$0', 'C:$0');
//
//        echo "preg_filter returns\n";
//        var_dump(preg_filter($pattern, $replace, $subject));
//
//        echo "preg_replace returns\n";
//        var_dump(preg_replace($pattern, $replace, $subject));
        /**
         *  string preg_quote( string $str[, string $delimiter = NULL] )
         *      preg_quote()需要参数 str 并向其中每个正则表达式语法中的字符前增加一个反斜线。 这通常用于你有一些运行时字符串需要作为正则表达式进行匹配的时候。
         *      str
                    输入字符串
                delimiter
                    如果指定了可选参数 delimiter，它也会被转义。这通常用于转义PCRE函数使用的分隔符。 /是最通用的分隔符。
         */
//        $a = ',fdsfds.fdsfds/fsdfs311?d+';
//        $result = preg_quote($a,'1');
//        var_dump($result);
        /**
         *  mixed preg_replace_callback( mixed $pattern, callable $callback, mixed $subject[, int $limit = -1[, int &$count]] )
         *      这个函数的行为除了可以指定一个 callback 替代 replacement 进行替换字符串的计算，其他方面等同于 preg_replace()。
         */
    }
}