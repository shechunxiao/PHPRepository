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

        $result = date('@321321');
        var_dump($result);

    }


}
