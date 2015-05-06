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

$slot = new SlotMachine([1000,500,300,200,150,100,60,50,40,1]);

dd($slot->spin());

//dd($slot->testPayout());
//dd($slot->testSpin(10000));