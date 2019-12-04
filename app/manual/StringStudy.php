<?php

namespace app\manual;

use app\interfaces\Base;
use Cassandra\Varint;

class StringStudy implements Base
{

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

    }


}