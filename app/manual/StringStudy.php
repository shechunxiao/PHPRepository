<?php

namespace app\manual;

use app\interfaces\Base;
use Cassandra\Varint;

class StringStudy implements Base
{
    public $s = 1312321;
    protected $str = ' this is a test';
    protected $str2 = 'http://waiterapp.shechunxiao.com/group=business&action=index&method=menu#/business/ticket/lists';

    /**
     * 字符串显示
     */
    public function index()
    {
//        $this->pos();
//        $this->sub();
//        $this->str_();
//        $this->strlens();
//        $this->rev();
        $this->operateStr();
    }

    /**
     * 查找字符串的位置
     *     总列:
     *          strpos
     *          stripos
     *          strrpos
     *          strripos
     */
    public function pos()
    {
        /**
         *  区分大小写的第一次位置
         *  mixed strpos( string $haystack, mixed $needle[, int $offset = 0] )
         *      返回 needle 在 haystack 中首次出现的数字位置。
         *      返回 needle 存在于 haystack 字符串起始的位置(独立于 offset)。同时注意字符串位置是从0开始，而不是从1开始的。
         *      haystack
         * 在该字符串中进行查找。
         * needle
         * 如果 needle 不是一个字符串，那么它将被转换为整型并被视为字符的顺序值。
         * offset
         * 如果提供了此参数，搜索会从字符串该字符数的起始位置开始统计。和 strrpos()、 strripos()不一样，这个偏移量不能是负数。
         */
//        $result = strpos($this->str,'IS');
//        var_dump($result);
        /**
         *  不区分大小写的第一次位置
         *  int stripos( string $haystack, string $needle[, int $offset = 0] )
         *      返回 needle 存在于 haystack 字符串开始的位置(独立于偏移量)。同时注意字符串位置起始于 0，而不是 1。如果未发现 needle 将返回 FALSE。
         *      haystack
         * 在该字符串中查找。
         * needle
         * 注意 needle 可以是一个单字符或者多字符的字符串。
         * 如果 needle 不是一个字符串，那么它将被转换为整型并被视为字符顺序值。
         * offset
         * 可选的 offset 参数允许你指定从 haystack 中的哪个字符开始查找。返回的位置数字值仍然相对于 haystack 的起始位置。
         */
//        $result = stripos($this->str,'IS');
//        var_dump($result);
        /**
         *  区分大小写的最后一次位置
         *  int strrpos( string $haystack, string $needle[, int $offset = 0] )
         *      返回字符串 haystack 中 needle 最后一次出现的数字位置。注意 PHP4 中，needle 只能为单个字符。如果 needle 被指定为一个字符串，那么将仅使用第一个字符。
         *      返回 needle 存在的位置。如果没有找到，返回 FALSE
         */
//        $result = strrpos($this->str,'is',-10);
//        var_dump($result);
        /**
         *  int strripos( string $haystack, string $needle[, int $offset = 0] )
         *      以不区分大小写的方式查找指定字符串在目标字符串中最后一次出现的位置。与 strrpos() 不同，strripos() 不区分大小写。
         *      返回 needle 相对于 haystack 字符串的位置(和搜索的方向和偏移量无关)。同时注意字符串的起始位置为 0 而非 1。
         */
//        $result = strripos($this->str,'IS');
//        var_dump($result);
    }

    /**
     * 获取子串
     *     总列:
     *          substr
     *          substr_compare
     *          substr_count
     *          substr_replace
     *          strstr
     *          stristr
     *          strrchr
     *          strpbrk
     *          strtok
     *
     */
    public function sub()
    {
        /**
         *  根据length截取字符串
         *  string substr( string $string, int $start[, int $length] )
         *      返回字符串 string 由 start 和 length 参数指定的子字符串。
         *      string
                    输入字符串。
                start
                    如果 start 是非负数，返回的字符串将从 string 的 start 位置开始，从 0 开始计算。例如，在字符串 "abcdef" 中，在位置 0 的字符是 "a"，位置 2 的字符串是 "c" 等等。
                    如果 start 是负数，返回的字符串将从 string 结尾处向前数第 start 个字符开始。
                    如果 string 的长度小于或等于 start，将返回 FALSE。
         *      length
                    如果提供了正数的 length，返回的字符串将从 start 处开始最多包括 length 个字符（取决于 string 的长度）。
                    如果提供了负数的 length，那么 string 末尾处的许多字符将会被漏掉（若 start 是负数则从字符串尾部算起）。如果 start 不在这段文本中，那么将返回一个空字符串。
                    如果提供了值为 0，FALSE 或 NULL 的 length，那么将返回一个空字符串。
                    如果没有提供 length，返回的子字符串将从 start 位置开始直到字符串结尾。
         */
//        $result = substr($this->str2,-100,-1);
//        var_dump($result);
        /**
         *  比较一部分length哪个长
         *  int substr_compare( string $main_str, string $str, int $offset[, int $length[, bool $case_insensitivity = false]] )
         *      substr_compare() 从偏移位置 offset 开始比较 main_str 与 str，比较长度为 length 个字符。
         *      如果 main_str 从偏移位置 offset 起的子字符串小于 str，则返回小于 0 的数；如果大于 str，则返回大于 0 的数；如果二者相等，则返回 0。
         *      ($main_str-$offset) > $str  = 1;
         *      ($main_str-$offset) = $str  = 0;
         *      ($main_str-$offset) < $str  = -1;
         *      如果 offset 大于等于 main_str 的长度或 length 被设置为小于 1 的值（ PHP 5.6 之前的版本），substr_compare() 将打印出一条警告信息并且返回 FALSE。
         */
//        $result = @substr_compare('abc','abcd',10); //如果 offset 大于等于 main_str 的长度或 length 被设置为小于 1 的值（ PHP 5.6 之前的版本），substr_compare() 将打印出一条警告信息并且返回 FALSE。
//        var_dump($result);
        /**
         *  区分大小写的统计出现的次数，>=0
         *  int substr_count( string $haystack, string $needle[, int $offset = 0[, int $length]] )
         *      substr_count() 返回子字符串needle 在字符串 haystack 中出现的次数。注意 needle 区分大小写。
         *      haystack
                    在此字符串中进行搜索。
                needle
                    要搜索的字符串。
                offset
                    开始计数的偏移位置。
                length
                    指定偏移位置之后的最大搜索长度。如果偏移量加上这个长度的和大于 haystack 的总长度，则打印警告信息。
         */
//        $result = substr_count($this->str2,'https');
//        var_dump($result);
        /**
         *  mixed substr_replace( mixed $string, mixed $replacement, mixed $start[, mixed $length] )
         *      substr_replace() 在字符串 string 的副本中将由 start 和可选的 length 参数限定的子字符串使用 replacement 进行替换。
         *      返回结果字符串。如果 string 是个数组，那么也将返回一个数组。
         *      string
                    输入字符串
         *      replacement
                    替换字符串。
                start
                    如果 start 为正数，替换将从 string 的 start 位置开始。
                    如果 start 为负数，替换将从 string 的倒数第 start 个位置开始。
                length
                    如果设定了这个参数并且为正数，表示 string 中被替换的子字符串的长度。如果设定为负数，它表示待替换的子字符串结尾处距离 string 末端的字符个数。如果没有提供此参数，那么它默认为 strlen( string ) （字符串的长度）。当然，如果 length 为 0，那么这个函数的功能为将 replacement 插入到 string 的 start 位置处。
         */
//        $result = substr_replace('abcdefg','@',0,5);
//        var_dump($result);
        /**
         *  区分大小写
         *  string strstr( string $haystack, mixed $needle[, bool $before_needle = false] )
         *      返回 haystack 字符串从 needle 第一次出现的位置开始到 haystack 结尾的字符串。
         *      返回字符串的一部分或者 FALSE（如果未发现 needle）。
         *      haystack
                    输入字符串。
                needle
                    如果 needle 不是一个字符串，那么它将被转化为整型并且作为字符的序号来使用。
                before_needle
                    若为 TRUE，strstr() 将返回 needle 在 haystack 中的位置之前的部分。
         */
//        $result = strstr($this->str,'is',false);
//        var_dump($result);
        /** 不区分大小写的strstr版本
         *  string stristr( string $haystack, mixed $needle[, bool $before_needle = false] )
         */
//        $result = stristr($this->str,'Is');
//        var_dump($result);
        /**
         *  该函数是查找字符，并且返回最后一个字符到最后的位置的字符串
         *  string strrchr( string $haystack, mixed $needle)
         *      该函数返回 haystack 字符串中的一部分，这部分以 needle 的最后出现位置开始，直到 haystack 末尾。
         *      该函数返回字符串的一部分。如果 needle 未被找到，返回 FALSE。
         *      haystack
                    在该字符串中查找。
                needle
                    如果 needle 包含了不止一个字符，那么仅使用第一个字符。该行为不同于 strstr()。
                如果 needle 不是一个字符串，那么将被转化为整型并被视为字符顺序值。
         */
//        $result = strrchr($this->str,'is');
//        var_dump($result);
        /**
         *  这个函数就是strrchr的加强版，如果有多个字符，我们查找其中任意一个存在，就返回存在的位置到结尾的字符串
         *  string strpbrk( string $haystack, string $char_list)
         *      strpbrk() 函数在 haystack 字符串中查找 char_list 中的字符。
         *      haystack
                    在此字符串中查找 char_list。
                char_list
                    该参数区分大小写。
         *      返回一个以找到的字符开始的子字符串。如果没有找到，则返回 FALSE。
         */
//        $result = strpbrk($this->str,'ms');
//        var_dump($result);
        /**
         *  string strtok( string $str, string $token)
            string strtok( string $token)
         *  strtok() 将字符串 str 分割为若干子字符串，每个子字符串以 token 中的字符分割。这也就意味着，如果有个字符串是 "This is an example string"，你可以使用空格字符将这句话分割成独立的单词。
         *  注意仅第一次调用 strtok 函数时使用 string 参数。后来每次调用 strtok，都将只使用 token 参数，因为它会记住它在字符串 string 中的位置。如果要重新开始分割一个新的字符串，
         *  你需要再次使用 string 来调用 strtok 函数，以便完成初始化工作。注意可以在 token 参数中使用多个字符。字符串将被该参数中任何一个字符分割。
         */
//        $str = 'this@fdsfsd@jfdsjfs@';
//        $result = strtok($str,'@');
//        var_dump($result);
//        $result = strtok('@');
//        var_dump($result);
//        $result = strtok('@');
//        var_dump($result);
//        $result = strtok('@');
//        var_dump($result);

    }

    /**
     *  str_型函数
     *      总列:
     *          str_replace
     *          str_ireplace
     *          str_shuffle
     *          str_split
     *          str_getcsv
     *
     */
    public function str_(){
        /**
         *  mixed str_replace( mixed $search, mixed $replace, mixed $subject[, int &$count] )
         *      该函数返回一个字符串或者数组。该字符串或数组是将 subject 中全部的 search 都被 replace 替换之后的结果。
                如果有一些特殊的替换需求（比如正则表达式），你应该使用该函数替换 ereg_replace() 和 preg_replace()。
         *      count
                    如果被指定，它的值将被设置为替换发生的次数。
         */
//        $result = str_replace('IS','@',$this->str);
//        var_dump($result);
        /**
         *  str_replace的忽略大小写版本
         *  mixed str_ireplace( mixed $search, mixed $replace, mixed $subject[, int &$count] )
         */
//        $result = str_ireplace('IS','@',$this->str);
//        var_dump($result);
        /**
         *  string str_shuffle( string $str)
         *      str_shuffle() 函数打乱一个字符串，使用任何一种可能的排序方案。
         */
//        $result = str_shuffle($this->str);
//        var_dump($result);
        /**
         *  array str_split( string $string[, int $split_length = 1] )
         *      将一个字符串转换为数组。
         *      string
                    输入字符串。
                split_length
                    每一段的长度。
         *  如果指定了可选的 split_length 参数，返回数组中的每个元素均为一个长度为 split_length 的字符块，否则每个字符块为单个字符。
            如果 split_length 小于 1，返回 FALSE。如果 split_length 参数超过了 string 超过了字符串 string 的长度，整个字符串将作为数组仅有的一个元素返回。
         */
//        $result = str_split($this->str,10);
//        var_dump($result);


    }

    /**
     * 字符串长度
     *  int strlen( string $string)
     *      成功则返回字符串 string 的长度；如果 string 为空，则返回 0。
     */
    public function strlens(){
//        $result = strlen($this->str);
//        var_dump($result);
    }

    /**
     * 翻转字符串
     *      string strrev( string $string)
     *
     */
    public function rev(){
//        $result = strrev($this->str);
//        var_dump($result);
    }

    /**
     * 操作字符串
     */
    public function operateStr(){
        /**
         * string strval( mixed $var)
         *  返回 var 的 string 值。参见 string 文档获取更多关于字符串转换的信息。
         *  var 可以是任何标量类型。不能将 strval() 用于数组或对象。
         */
//        $a = 12.33;
//        $result = strval($a);
//        var_dump($result);
        /**
         *  int intval( mixed $var[, int $base = 10] )
         */
//        $a = '131';
//        $result = intval($a);
//        var_dump($a);
        /**
         *  float floatval( mixed $var)
         */
//        $a = '.343233333333333333333333333333333333333k.32432';
//        $result = floatval($a);
//        var_dump($result);
        /**
         *  string strtolower( string $string)
         *  string strtoupper( string $string)
         */
//        $a = 'dfdssfd1312321321';
//        $result = strtolower($a);
//        $result = strtoupper($a);
//        var_dump($result);
        /**
         *  int strtotime( string $time[, int $now = time()] )
         */
//        $a = '2019-2-2';
//        $result = strtotime($a);
//        var_dump($result);
        /**
         *  string strip_tags( string $str[, string $allowable_tags] )
         *      从字符串中去除 HTML 和 PHP 标记
         *      该函数尝试返回给定的字符串 str 去除空字符、HTML 和 PHP 标记后的结果。
         */
//        $a = '发大幅度是咖啡店是看就看独守空房<p>fdsfds</p><a>df</a>';
//        $result = strip_tags($a,'<a><p>');
//        var_dump($result);
        /**
         *  string chr( int $ascii)  返回相对应于 ascii 所指定的单个字符。
         *  int ord( string $string) 返回字符串 string 第一个字符的 ASCII 码值。
         */
//        $result = chr(65);
//        $result = ord('B');
//        var_dump($result);
        /**
         *  string json_encode( mixed $value[, int $options = 0[, int $depth = 512]] )
         *  mixed json_decode( string $json[, bool $assoc = false[, int $depth = 512[, int $options = 0]]] )
         *      接受一个 JSON 格式的字符串并且把它转换为 PHP 变量
         *      json
                    待解码的 json string 格式的字符串。
         *      assoc
                    当该参数为 TRUE 时，将返回 array 而非 object 。
         */
//        $arr = array ('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
//        $result = json_encode($arr);
//        $result = json_decode($result,true);
//        var_dump($result);
        /**
         *  string nl2br( string $string[, bool $is_xhtml = true] )
         *      在字符串 string 所有新行之前插入 '<br />' 或 '<br>'，并返回。
         */
//        $a = "foo isn't\n bar";
//        $result = nl2br($a);
//        var_dump($result);
        /**
         *  string implode( string $glue, array $pieces) //用分隔符的连接
         *  string implode( array $pieces) //直接连接
         */
//        $arr = [1,2,3];
//        $result = implode('',$arr);
//        $result = implode($arr); //直接连接
//        var_dump($result);
        /**
         *  array explode( string $delimiter, string $string[, int $limit] )
         *  此函数返回由字符串组成的数组，每个元素都是 string 的一个子串，它们被字符串 delimiter 作为边界点分割出来。
         *  delimiter
                边界上的分隔字符。
            string
                输入的字符串。
            limit
                如果设置了 limit 参数并且是正数，则返回的数组包含最多 limit 个元素，而最后那个元素将包含 string 的剩余部分。
                如果 limit 参数是负数，则返回除了最后的 -limit 个元素外的所有元素。
                如果 limit 是 0，则会被当做 1。
         */
//        $str = '1,2,3,4,5,6';
//        $result = explode(',',$str);
//        var_dump($result);
        /**
         *  千位分割格式化
         *  string number_format( float $number[, int $decimals = 0] )
         *  string number_format( float $number, int $decimals = 0, string $dec_point = ".", string $thousands_sep = ",")
         *      本函数可以接受1个、2个或者4个参数（注意：不能是3个）:
         *      如果只提供第一个参数，number的小数部分会被去掉并且每个千位分隔符都是英文小写逗号","
                如果提供两个参数，number将保留小数点后的位数到你设定的值，其余同楼上
                如果提供了四个参数，number 将保留decimals个长度的小数部分, 小数点被替换为dec_point，千位分隔符替换为thousands_sep
         */
//        $a = 43243212.52943243234232;
//        $result = number_format($a); //只提供一个参数的时候，是四舍五入
//        $result = number_format($a,2); //也是四舍五入
//        $result = number_format($a,2,'/','@');
//        var_dump($result);
        /**
         *  string trim( string $str[, string $charlist = " \t\n\r\0\x0B"] )
         *  string ltrim( string $str[, string $character_mask] )
         *  string rtrim( string $str[, string $character_mask] )
         */
//        $a = 'zhangsna/,     *';
//        $result = trim($a,'* ,'); //和结尾的顺序无关，只要有这个存在就去掉
//        var_dump($result);
        /**
         *  string iconv( string $in_charset, string $out_charset, string $str)
         *      将字符串 str 从 in_charset 转换编码到 out_charset。
         */
//        $a = '张三是一个ren';
//        $result = iconv('UTF-8','GBK',$a);
//        var_dump($result);
        /**
         *  默认是40个字符
         *  string sha1( string $str[, bool $raw_output = false] )
         *      str
                    输入字符串。
                raw_output
                    如果可选的 raw_output 参数被设置为 TRUE，那么 sha1 摘要将以 20 字符长度的原始格式返回，否则返回值是一个 40 字符长度的十六进制数字。
         */
//        $a = '发生的范德萨';
//        $result = sha1($a,false);
//        var_dump($result);
//        var_dump(strlen($result));
        /**
         *  默认是32个字符
         *  string md5( string $str[, bool $raw_output = false] )
         *  str
                原始字符串。
            raw_output
                如果可选的 raw_output 被设置为 TRUE，那么 MD5 报文摘要将以16字节长度的原始二进制格式返回。
         */
//        $a = '付水电费第三方';
//        $result = md5($a);
//        var_dump($result);
//        var_dump(strlen($result));
        /**
         *  string addcslashes( string $str, string $charlist)
         *      返回字符串，该字符串在属于参数 charlist 列表中的字符前都加上了反斜线。
         *      当定义 charlist 参数中的字符序列时，需要确实知道介于自己设置的开始及结束范围之内的都是些什么字符。
         */
//        $a = 'fdsfds/fdfd.fdfds/fdsfds213@12\\r\\nfdsfdsds';
//        $result = addcslashes($a,'./@');
//        var_dump($result);
//        $a = "张三\r\n李四";
//        var_dump($a);
        /**
         *  string stripcslashes( string $str)
         *  返回反转义后的字符串。
         */
//        $a = 'fd@fdsfds/fdsfds,';
//        $result = addcslashes($a,'@/,');
//        $result = stripcslashes($result);
//        var_dump($result);
        /**
         *  string sprintf( string $format[, mixed $args[, mixed $...]] )
         *      format	必需。规定字符串以及如何格式化其中的变量。
                可能的格式值：
                %% - 返回一个百分号 %
                %b - 二进制数
                %c - ASCII 值对应的字符
                %d - 包含正负号的十进制数（负数、0、正数）
                %e - 使用小写的科学计数法（例如 1.2e+2）
                %E - 使用大写的科学计数法（例如 1.2E+2）
                %u - 不包含正负号的十进制数（大于等于 0）
                %f - 浮点数（本地设置）
                %F - 浮点数（非本地设置）
                %g - 较短的 %e 和 %f
                %G - 较短的 %E 和 %f
                %o - 八进制数
                %s - 字符串
                %x - 十六进制数（小写字母）
                %X - 十六进制数（大写字母）
                附加的格式值。必需放置在 % 和字母之间（例如 %.2f）：

                + （在数字前面加上 + 或 - 来定义数字的正负性。默认情况下，只有负数才做标记，正数不做标记）
                ' （规定使用什么作为填充，默认是空格。它必须与宽度指定器一起使用。例如：%'x20s（使用 "x" 作为填充））
                - （左调整变量值）
                [0-9] （规定变量值的最小宽度）
                .[0-9] （规定小数位数或最大字符串长度）
                注释：如果使用多个上述的格式值，它们必须按照上面的顺序进行使用，不能打乱。

                arg1	必需。规定插到 format 字符串中第一个 % 符号处的参数。
                arg2	可选。规定插到 format 字符串中第二个 % 符号处的参数。
                arg++	可选。规定插到 format 字符串中第三、四等等 % 符号处的参数。
         */
//        $a = 123.45;
//        $b = 1232321321.3213333333333333;
//        $result = sprintf('%%-%b',$a);
//        var_dump($result);
//        $result = sprintf('%%-%c',97);
//        var_dump($result);
//        $result = sprintf('%%-%d',$a); //直接把小数点去掉了,割舍小数部分
//        var_dump($result);
//        $result = sprintf('%%-%e',$b);
//        var_dump($result);
//        $result = sprintf('%%-%E',$b);
//        var_dump($result);
//        $result = sprintf('%%-%u',$b);
//        var_dump($result);
//        $result = sprintf('%%-%f',$b);
//        var_dump($result);
//        $result = sprintf('%%-%F',$b);
//        var_dump($result);
//        $result = sprintf('%%-%g',$b);
//        var_dump($result);
//        $result = sprintf('%%-%G',$b);
//        var_dump($result);
//        $result = sprintf('%%-%o',$b);
//        var_dump($result);
//        $result = sprintf('%%-%s',$b);
//        var_dump($result);
//        $result = sprintf('%%-%x',$b);
//        var_dump($result);
//        $result = sprintf('%%-%X',$b);
//        var_dump($result);
//        $c = 12;
//        $result =sprintf('%%-%02s',$c);
//        var_dump($result);
//        $d = 25.14;
//        var_dump(sprintf("%.".(2+1)."f", floatval($d)));
//        $result = substr(sprintf("%.".(2+1)."f", floatval($d)), 0, -1);
//        var_dump($result);
//        $e = 123123.32131;
//        $result = sprintf('%%-%.3f-%.3F',$e,$e);
//        var_dump($result);
        /**
         *  string addslashes( string $str)
         *      返回字符串，该字符串为了数据库查询语句等的需要在某些字符前加上了反斜线。这些字符是单引号（'）、双引号（"）、反斜线（\）与 NUL（NULL 字符）。
         *  string stripslashes( string $str)
         *      反引用一个引用字符串。
         */
//        $a = 'fdsfsdkjj313.1,1232null"1321';
//        $result = addslashes($a);
//        var_dump($result);
//        $result = stripslashes($result);
//        var_dump($result);
        /**
         *  string lcfirst( string $str)
         *  string ucfirst( string $str)
         */
//        $a = 'word';
//        $result = lcfirst($a);
//        var_dump($result);
//        $result = ucfirst($a);
//        var_dump($result);
        /**
         *  //这个是用来解析url的
         *  void parse_str( string $str[, array &$arr] )
         *      将字符串解析成多个变量
         *      如果 str 是 URL 传递入的查询字符串（query string），则将它解析为变量并设置到当前作用域。
         *      str
                    输入的字符串。
                arr
                    如果设置了第二个变量 arr，变量将会以数组元素的形式存入到这个数组，作为替代。
         */
//        $a = 'first=value&arr[]=foo+bar&arr[]=baz';
//        parse_str($a,$b);
//        var_dump($b);
        /**
         *  str_word_count — 返回字符串中单词的使用情况
         *  mixed str_word_count( string $string[, int $format = 0[, string $charlist]] )
         *      参数
                string
                    字符串。
                format
                    指定函数的返回值。当前支持的值如下：
                    ◦ 0 - 返回单词数量
                    ◦ 1 - 返回一个包含 string 中全部单词的数组
                    ◦ 2 - 返回关联数组。数组的键是单词在 string 中出现的数值位置，数组的值是这个单词
                charlist
                    附加的字符串列表，其中的字符将被视为单词的一部分。
         */
//        $a = 'this is a test /';
//        $result = str_word_count($a,2,'/');
//        var_dump($result);
        /**
         *  string vsprintf( string $format, array $args)
         *      作用与 sprintf() 函数类似，但是接收一个数组参数，而不是一系列可变数量的参数。
         *      print vsprintf("%04d-%02d-%02d", explode('-', '1988-8-1')); // 1988-08-01
         */


    }


}