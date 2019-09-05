<?php

namespace app;


use app\interfaces\Base;

class Entry
{
    public function __invoke(Base $base,$method)
    {
        call_user_func(array($base,$method));
    }
}