<?php
/**
 * Created by Alexander 'unglued' Matrosov.
 * Company: Apus Agency
 * Site: http://www.apus.ag
 * E-mail: alex@apus.ag
 * Date: 05/05/15
 * Copyright (c) 2006-2015 Apus Agency
 */

namespace Unglued;


class SlotMachine
{

    protected $reels = 3;
    protected $virtual = 128;
    protected $probabilities;
    protected $payout;
    protected $reelsMap;

    public function __construct($payout, $probabilities = [])
    {
        $this->probabilities = (empty($probabilities) ? $this->getProportions(count($payout)) : $probabilities);

        $payMap = [];
        $alphabet = 'a';
        foreach ($payout as $pay) {
            $payMap[$alphabet] = $pay;
            ++$alphabet;
        }

        $this->payout = $payMap;
        $this->reelsMap = $this->generateReelsMap();
    }

    protected function getProportions($symbols = 5)
    {
        $min = 1;
        $alphabet = 'a';
        $cc = (2 * $this->virtual - 2 * $min * $symbols) / ($symbols * ($symbols - 1));

        $probabilities = [];

        for ($i = 0; $i < $symbols; ++$i) {
            $probabilities[$alphabet] = $min;
            $min += (int)floor($cc);


            if ($i == $symbols - 1) {
                $probabilities[$alphabet] += $this->virtual - array_sum($probabilities);
            }

            ++$alphabet;
        }

        return $probabilities;
    }

    protected function generateReelsMap()
    {
        $reelMap = [];
        foreach ($this->probabilities as $key => $prob) {

            $reelMap += array_fill(count($reelMap), $prob, $key);

        }

        shuffle($reelMap);

        $first = $reelMap[0];
        unset($reelMap[0]);
        $reelMap[] = $first;

        return $reelMap;

    }

    public function setProportions($probabilities)
    {
        $this->probabilities = $probabilities;
    }

    public function spin()
    {
        $result = [];
        for ($j = 0; $j < 3; ++$j) {
            $result[] = $this->reelsMap[$this->getRand()];
        }

        $tmp = [];
        foreach ($result as $res) {
            @$tmp[$res] += 1;
        }
        $orig = $tmp;
        asort($tmp);

        if (end($tmp) >= 2) {
            $tmp = array_keys($tmp);

            return array_fill(0, 3, end($tmp));
        }

        return array_slice(array_keys($orig), 0, $this->reels);

    }

    protected function getRand()
    {
        return mt_rand() % $this->virtual + 1;
    }

    public function testSpin($times)
    {

        $kombs = [];
        $win = 0;
        for ($i = 0; $i < $times; ++$i) {
            $result = [];
            for ($j = 0; $j < 3; ++$j) {
                $result[] = $this->reelsMap[$this->getRand()];
            }

            $tmp = [];
            foreach ($result as $res) {
                @$tmp[$res] += 1;
            }
            asort($tmp);

            if (end($tmp) >= 2) {
                $win += 1;
                $tmp = array_keys($tmp);
                @$kombs[end($tmp)] += 1;
            }
        }

        ksort($kombs);
        dd([
            'win' => $win,
            'win %' => $win * 100 / $times,
            'kombs' => $kombs
        ]);
    }

    public function testPayout()
    {
        $result = [];
        foreach ($this->probabilities as $symb => $prob) {
            $result[$symb . '|' . $prob] = pow($prob / $this->virtual, $this->reels) * current($this->payout) * 100;
            next($this->payout);
        }

        $result['total'] = round(array_sum($result), 2) . '%';

        return $result;
    }


}