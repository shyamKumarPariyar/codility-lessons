<?php

namespace Lesson08;

class Peaks
{
    public function solution($A)
    {
        $N = count($A);
        if ($N <= 2) {
            return 0;
        }
        $sum = array_fill(0, $N, 0);
        for ($i = 1; $i < $N; $i++) {
            $sum[$i] = $sum[$i - 1];
            if ($A[$i] > $A[$i - 1] && $A[$i] > $A[$i + 1]) {
                $sum[$i]++;
            }
        }
        $sum[$N - 1] = $sum[$N - 2];

        $func = function($sum = [], $m) {
            if ($sum[$m - 1] <= 0) {
                return false;
            }
            $length = count($sum);
            for ($i = 2; $i <= $length / $m; $i++) {
                if ($sum[($i * $m) - 1] - $sum[($i * $m) - $m - 1] <= 0) {
                    return false;
                }
            }

            return true;
        };

        for ($i = 1; $i <= $N; $i++) {
            if ($N % $i == 0 && $func($sum, $i)) {
                return $N / $i;
            }
        }

        return 0;
    }
}
