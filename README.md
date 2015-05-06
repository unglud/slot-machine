# Slot Machine
Simple slot machine algorithm.

This is a simple tech demo for slot machine algorithm for PHP.

[![GitHub release](https://img.shields.io/github/release/unglud/slot-machine.svg)](https://github.com/unglud/slot-machine/releases)
[![Build Status](https://travis-ci.org/unglud/slot-machine.svg?branch=master)](https://travis-ci.org/unglud/slot-machine)
[![License](https://img.shields.io/packagist/l/unglud/slot-machine.svg)](https://github.com/unglud/slot-machine/blob/master/LICENSE)
[![Total Downloads](https://img.shields.io/packagist/dt/unglud/slot-machine.svg)](https://packagist.org/packages/unglud/slot-machine)

## Installation

Laravel Image is distributed as a composer package. So you first have to add the package to your `composer.json` file:

```
{
    "require": {
        "unglud/slot-machine": "@dev"
    }
}
```

## Usage

For start you need create Payout and test it

```php
$slot = new SlotMachine([1000,500,300,200,150,100,60,50,40,1]);
dd($slot->testPayout());
```

In result you will see something like this

```
array:11 [
  "a|1" => 0.0476837158203
  "b|3" => 0.643730163574
  "c|5" => 1.78813934326
  "d|7" => 3.27110290527
  "e|9" => 5.21421432495
  "f|11" => 6.34670257568
  "g|13" => 6.28566741943
  "h|15" => 8.04662704468
  "i|17" => 9.37080383301
  "j|47" => 4.95066642761
  "total" => "45.97%"
]
```

Probabilities generates automatically based on Arithmetic progression, but you can set it manually on second argument:
 
```
$probs = [
    'a'=>4,
    'b'=>40,
    'c'=>84
];

$slot = new SlotMachine([10,5,1], $probs);
```

## License

Laravel Image is released under the MIT Licence. See the bundled LICENSE file for details.
