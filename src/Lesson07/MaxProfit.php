<?php

namespace Lesson07;

class MaxProfit
{
    public function solution($A)
    {
        $N = count($A);
        $maxProfit = 0;
        if ($N) {
            $minPrice = $A[0];
            for ($i = 1; $i < $N; $i++) {
                if ($A[$i] < $minPrice) {
                    $minPrice = $A[$i];
                }

                if ($A[$i] - $minPrice > $maxProfit) {
                    $maxProfit = $A[$i] - $minPrice;
                }
            }
        }

        return $maxProfit;
    }
}
