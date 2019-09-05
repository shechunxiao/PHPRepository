<?php

namespace app;
class Other
{
    public function index()
    {
        echo 'Other/index';
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        echo 'Other没有该方法';
    }

    public static function otherStatic()
    {
        echo 'Other/otherStatic';
    }
}