<?php

namespace Lesson01;

class TapeEquilibrium
{
    public function solution ($A)
    {
        $count = count($A);
        $left = 0;
        $right = array_sum($A);
        $min = PHP_INT_MAX;
        for ($i = 0; $i < $count - 1; $i++) {
            $left += $A[$i];
            $right -= $A[$i];
            $difference = abs($left - $right);
            if ($difference < $min) {
                $min = $difference;
            }
        }

        return $min;
    }
}
