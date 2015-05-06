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


//dd('asf');

$slot = new SlotMachine([1000,500,300,200,150,100,60,50,40,1]);

$slot->spin(10000);

//dd($slot->testPayout());
//dd($slot->getProportions(10));
//dd($slot->generateReelsMap());