<?php
use Symfony\Component\VarDumper\VarDumper;

function dd($var){
    VarDumper::dump($var);
}