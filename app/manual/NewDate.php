<?php

namespace app\manual;

/**
 * 时间研究
 * Class NewDate
 * @package app\manual
 */
class NewDate
{
    /**
     * 时间研究
     */
    public function index()
    {
//        echo time();
//        $getdate = getdate();
//        print_r($getdate);
//        echo date('Y').'</br>';
//        echo date('m').'</br>';
//        echo date('d').'</br>';
//        echo date('H').'</br>';
//        echo date('i').'</br>';
//        echo date('s').'</br>';
//        echo date('l').'</br>';
//        echo date('N').'</br>';
//        echo date('S').'</br>';
//        echo date('w').'</br>';
//        echo date('z',strtotime('2021-12-31 13:56:23')).'</br>';
//        echo date('L',strtotime('2024-05-12')).'</br>';
//        echo date('O').'</br>';
//        echo date('U').'</br>';
//        echo microtime().'</br>';
//        echo microtime(true).'</br>';
//        var_dump(is_link( './index.html'));
//        echo realpath( './index.html');
//        echo mime_content_type('./mypic.png');

//        $result = checkdate('12','09','2020'); // 正确值
//        var_dump($result);
//        $result = checkdate('12','32','2020'); // 错误值
//        var_dump($result);

        $time = strtotime('2021-01-09 17:44:56'); // 时间戳 1610185496

        echo '***************日***************'.'</br>';
        echo date('d',$time).'</br>';
        echo date('D',$time).'</br>';
        echo date('j',$time).'</br>';
        echo date('l',$time).'</br>';
        echo date('N',$time).'</br>';
        echo date('S',$time).'</br>';
        echo date('w',$time).'</br>';
        echo date('z',$time).'</br>';
        echo '***************星期***************'.'</br>';
        echo date('W',$time).'</br>';
        echo '***************月***************'.'</br>';
        echo date('F',$time).'</br>';
        echo date('m',$time).'</br>';
        echo date('M',$time).'</br>';
        echo date('n',$time).'</br>';
        echo date('t',$time).'</br>';
        echo '***************年***************'.'</br>';
        echo date('L',$time).'</br>';
        echo date('o',$time).'</br>';
        echo date('Y',$time).'</br>';
        echo date('y',$time).'</br>';
        echo '***************时间***************'.'</br>';
        echo date('a',$time).'</br>';
        echo date('A',$time).'</br>';
        echo date('g',$time).'</br>';
        echo date('G',$time).'</br>';
        echo date('h',$time).'</br>';
        echo date('H',$time).'</br>';
        echo date('i',$time).'</br>';
        echo date('s',$time).'</br>';
        echo date('u',$time).'</br>';
        echo '***************时区***************'.'</br>';
        echo date('e',$time).'</br>';
        echo date('I',$time).'</br>';
        echo date('O',$time).'</br>';
        echo date('P',$time).'</br>';
        echo date('T',$time).'</br>';
        echo date('Z',$time).'</br>';
        echo date('c',$time).'</br>';
        echo date('r',$time).'</br>';
        echo date('U',$time).'</br>';
        echo '***************其他***************'.'</br>';
        echo date(DATE_RFC3339).'</br>';
        echo date(DATE_ISO8601).'</br>';
    }


}
