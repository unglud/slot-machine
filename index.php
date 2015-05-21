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
    'b' => 2,
    'c' => 2,
    'd' => 2,
    'e' => 2,
    'f' => 8,
    'g' => 8,
    'h' => 8,
    'i' => 10,
    'j' => 20,
    'k' => 65
];


dd(array_sum($prob));

$slot = new SlotMachine([10000, 100, 100, 100, 100, 50, 50, 50, 10, 5, 1], $prob);


dd($slot->testPayout());
$slot->testSpin(10000);

dd($slot->spin());