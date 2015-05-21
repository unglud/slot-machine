<?php
/**
 * Created by Alexander 'unglued' Matrosov.
 * Company: Apus Agency
 * Site: http://www.apus.ag
 * E-mail: alex@apus.ag
 * Date: 05/05/15
 * Copyright (c) 2006-2015 Apus Agency
 */
use Unglued\SlotMachine;

require_once __DIR__ . '/vendor/autoload.php';

$prob = [
    'a' => 1,
    'b' => 5,
    'c' => 5,
    'd' => 5,
    'e' => 5,
    'f' => 11,
    'g' => 11,
    'h' => 11,
    'i' => 14,
    'j' => 20,
    'k' => 41
];


dd(array_sum($prob));

$slot = new SlotMachine([10000, 2000, 2000, 2000, 2000, 400, 400, 400, 300, 5, 1], $prob);


dd($slot->testPayout());
$slot->testSpin(10000);

dd($slot->spin());