<?php

class Pipeline
{
    public static function make()
    {
        $args = func_get_args();
        $func = function ($arg) use ($args) {
            foreach ($args as $func) {
                if (!isset($value))
                    $value = $func($arg);
                else
                    $value = $func($value);
            }
            return $value;
        };
        return $func;
    }
}


$num = Pipeline::make(
    function ($x) {
        return $x * 3;
    },
    function ($x) {
        return $x + 1;
    },
    function ($x) {
        return $x / 2;
    }
);
echo $num(3);


