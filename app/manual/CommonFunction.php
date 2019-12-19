<?php

namespace app\manual;

use app\interfaces\Base;

class CommonFunction implements Base
{


    public function index()
    {
        $arr = [
            ['A1', 'A2', 'A3'],
            ['B1', 'B2'],
            ['C1'],
            ['D1','D2','D3','D4','D5']
        ];
        $brr = [
            ['A1','A2'],
            ['B1','B2','B3'],
            ['C1','C2','C3','C4'],
            ['D1','D2'],
        ];
        $result = $this->combine($arr);
        var_dump($result);
    }

    public function combine($arr)
    {
        $result = array_reduce($arr, function ($v, $m) {
            $temp = [];
            foreach ($v as $vv) {
                foreach ($m as $mm) {
                    if (empty($vv)) {
                        $temp[] = $mm;
                    } else {
                        $temp[] = $vv . ';' . $mm;
                    }
                }
            }
            return $temp;
        }, ['']);
        return $result;
    }


}
