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

$slot = new SlotMachine([100,50,25,10,3]);



dd($slot->testPayout());
$slot->testSpin(10000);

dd($slot->spin());