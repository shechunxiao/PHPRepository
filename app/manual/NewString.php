<?php

namespace app\manual;

/**
 * 数组研究
 * Class NewArray
 * @package app\manual
 */
class NewString
{
    public function index()
    {
//        $str = addcslashes('reset', 'r');
//        echo $str.'</br>';
//        $str = stripcslashes($str);
//        echo $str.'</br>';
//        $str = addslashes("Is \your name  O'reilly?");
//        echo $str.'</br>';
//        $str = stripslashes($str);
//        echo $str.'</br>';
//        $str = chunk_split('ceshisjfdkskf',2);
//        echo $str.'</br>'; // ce sh is jf dk sk f
//        $str = str_split('ceshisjfdkskf',2);
//        print_r($str); // Array ( [0] => ce [1] => sh [2] => is [3] => jf [4] => dk [5] => sk [6] => f )
//        $str = convert_cyr_string('中华人民共和国','k-koi8-r','a-x-cp866'); // 弃用了
//        echo $str;
//        $str = convert_uuencode('疯狂夺金是复健科了单身快乐发多少');
//        echo $str.'</br>';
//        $str = convert_uudecode('疯狂夺金是复健科了单身快乐发多少');
//        echo $str.'</br>';
//        $str = count_chars("testiste",0);
//        print_r($str);
//        $str = crc32("The quick brown fox jumped over the lazy dog.");
//        echo $str.'</br>';
//        $str = crypt('password','233');
//        echo $str.'</br>';
//        $str = htmlentities('<div>张三</div>');
//        echo $str.'</br>';
//        $str = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
//        echo strip_tags($str).'</br>';
//        $str = levenshtein( '放假圣诞节快乐发大水口', '放塑料袋口放款了减多少');
//        echo strip_tags($str).'</br>';
//        $str = chop('sfds');
//        echo strip_tags($str).'</br>';
//        echo str_repeat("-=", 10);


        /**
         * trim
         */
//        $str = "\r\tabcdefkklss";
//        var_dump($str);
//        $result = rtrim($str);
//        var_dump($result);
        /**
         * 位置
         */
//        $str = 'abcdefgabcdefj';
//        $result = stripos($str,'A');
//        var_dump($result);

//        $str = 'abcdefgabcdefg';
//        $result = strrchr($str,'b');
//        var_dump($result);

        /**
         * 分割
         */
//        $str = chunk_split('abcdefghijklmn',2,'</br>');
//        var_dump($str);
//        $str = str_split('abcdefjhijklmn',3);
//        print_r($str);
//        $str = 'ab cd ef gh';
//        $result = explode(" ",$str,0);
//        print_r($result);
//        $keywords = preg_split("/[\s,]+/", "hypertext language, programming two",-2);
//        print_r($keywords);
//        $keywords = preg_split("/[\s,]+/", "hypertext language, programming, ,two",null,PREG_SPLIT_OFFSET_CAPTURE);
//        print_r($keywords);
//        $str = 'string';
//        $chars = preg_split('//', $str, -1,PREG_SPLIT_NO_EMPTY);
//        print_r($chars);
//        $result = mb_split(',','中华,人民,共合国',-10);
//        print_r($result);
//        $text = "The quick brown fox jumped over the lazy dog.";
//        $newtext = wordwrap($text, 20, "<br />\n");
//        echo $newtext;
//        $text = "A very long woooooooooooord.";
//        $newtext = wordwrap($text, 8, "<br />\n", true);
//        echo $newtext;
//        $result = strtok('this is an example',' ');
//        echo $result.'</br>';
//        $result = strtok(' ');
//        echo $result.'</br>';
//        $result = strtok(' ');
//        echo $result.'</br>';
//        $result = strtok(' ');
//        echo $result.'</br>';
//        $array = ['this','is','an','example'];
//        $result = implode($array);
//        echo $result;
//        $search = ['this','is','an'];
//        $replace = ['one','two'];
//        $array = ['this','is','an','example','this'];
//        $result = str_replace($search,$replace,$array,$count);
//        print_r($result);
//        echo $count;
//        $string = 'April 15, 2003';
//        $pattern = '/(\w+) (\d+), (\d+)/i';
//        $replacement = '${1}1,$3';
//        echo preg_replace($pattern, $replacement, $string);

//        $subject = 'this is an example'; // 18个字符
//        $result = substr_replace($subject,'@',16,-20);
//        echo $result;
//        $string = 'this is an example';
//        $result = strtr($string,'i','@');
//        echo $result;
//        $string = 'this is an example';
//        $result = strtr($string,['i'=>'#','a'=>'b']);
//        echo $result;
//        $result = str_pad('this',10,'test',STR_PAD_BOTH);
//        echo $result.'</br>';
//        $result = str_pad('this',10,'test',STR_PAD_LEFT);
//        echo $result.'</br>';
//        $result = str_pad('this',10,'test',STR_PAD_RIGHT);
//        echo $result.'</br>';
//        $result = str_repeat('@',5);
//        echo $result;
//        $number= 1234.567;
//        $result = number_format($number,2,'!','#');
//        echo $result;
//        $string = 'name=zhangsan&age=18&email=google@qq.com';
//        parse_str($string,$params);
//        print_r($params);
//        $url = 'http://username:password@hostname/path?arg=value&age=22#anchor';
//        $result = parse_url($url);
//        print_r($result);
//        $result = pathinfo('./NewArray.php',PATHINFO_EXTENSION);
//        print_r($result);
//        $data['name'] = 'zhangsan';
//        $data['age'] = 22;
//        $data['email'] = 'google@qq.com';
//        $data['empty'] = ' ';
//        $result = http_build_query($data,null,'@',PHP_QUERY_RFC3986);
//        echo $result;
//        $url = 'https%3A%2F%2Fwww.codeshort.cn%2Fbookrack';
//        $result = urldecode($url);
//        echo $result;
//        $str = 'this is an example';
//        $result = ucwords($str);
//        echo $result;

//        $a = "foo"; // length 3
//        $b = ""; // empty string
//        $c = "barbar"; // length 6
//
//        echo strcmp($a, $a); // outputs 0
//        echo strcmp($a, $c); // outputs 1
//        echo strcmp($c, $a); // outputs -1
//        echo strcmp($a, $b); // outputs 3
//        echo strcmp($b, $a); // outputs -3
//        echo strcmp($c, $b); // outputs 6
//        echo strcmp($b, $c); // outputs -6

//        $a = 'abcd';
//        $b = 'abcf';
//        echo strcmp($a,$b);
//        $a = 'abcd';
//        $b = 'abcf';
//        echo strncmp($a,$b,3);

//        $arr1 = $arr2 = array("img12.png", "img10.png", "img2.png", "img1.png");
//        echo "标准字符串比较\n";
//        usort($arr1, "strcmp");
//        print_r($arr1);
//        echo "\n自然排序字符串比较\n";
//        usort($arr2, "strnatcmp");
//        print_r($arr2);

//        echo substr_compare("abcde", "bc", 1, 2); // 0
//        echo substr_compare("abcde", "de", -2, 2); // 0
//        echo substr_compare("abcde", "bcg", 1, 2); // 0
//        echo substr_compare("abcde", "BC", 1, 2, true); // 0
//        echo substr_compare("abcde", "bc", 1, 3); // 1
//        echo substr_compare("abcde", "cd", 1, 2); // -1
//        echo substr_compare("abcde", "abc", 5, 1); // warning

//        $result = preg_match("/php/i", "PHP is the web scripting language of choice. php is very good",$matches,PREG_OFFSET_CAPTURE,50);
//        echo $result;
//        print_r($matches);

//        $string = 'abcdef';
//        echo substr($string, 1); // bcdef
//        echo substr($string, 1,2); // bc
//        echo substr($string, 5,2); // f
//        echo substr($string, 10,2); //
//        echo substr($string, 3,-1); // de
//        echo substr($string, 5,-4); //

//        $text = 'This is a Simple text.';
//// 输出 "is is a Simple text."，因为 'i' 先被匹配
//        echo strpbrk($text, 'mi');
//
//// 输出 "Simple text."，因为字符区分大小写
//        echo strpbrk($text, 'S');

//        $string = '<div class="test">实体</div>';
//        $result = htmlentities($string);
//        echo $result.'</br>';
//        $result = html_entity_decode($result);
//        echo $result.'</br>';

//        $str = 'I love "PHP".';
//        $result = htmlspecialchars($str, ENT_QUOTES);
//        echo $result.'</br>';
//        $result = htmlspecialchars_decode($result);
//        echo $result.'</br>';

//        $text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
//        echo strip_tags($text,'<a><p>');
//        echo "\n";

//        $result = strlen('abcdef');
//        echo $result.'</br>';
//        $result = strlen('中国人');
//        echo $result.'</br>';
//        $string = 'gcdgcdgcd';
//        $result = substr_count($string, 'gcdgcd');
//        echo $result.'</br>';
//        $string = 'abcdabcdfsdfds';
//        $result = substr_count($string,'abcd',20,30);
//        echo $result.'</br>';
//        $result = similar_text('acdbe','abc',$percent);
//        echo $result.'</br>';
//        echo $percent.'</br>';
    }
}
