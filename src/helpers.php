<?php
use Symfony\Component\VarDumper\VarDumper;

if (!function_exists('dd')) {
    function dd($var)
    {
        VarDumper::dump($var);
    }
}