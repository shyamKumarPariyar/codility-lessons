<?php

namespace Lesson04;

class MaxProductOfThree
{
    function solution($A)
    {
        $N = count($A);
        sort($A);

        $allPositives = [];
        $allNegatives = [];
        $twoNegatives = [];

        for ($i = $N - 3; $i < $N; $i++) {
            if ($A[$i] >= 0) {
                $allPositives[] = $A[$i];
            }
        }

        if (count($allPositives) === 0) {
            for ($i = $N - 3; $i < $N; $i++) {
                if ($A[$i] < 0) {
                    $allNegatives[] = $A[$i];
                }
            }
        } else {
            for ($i = 0; $i < 2; $i++) {
                if ($A[$i] < 0) {
                    $twoNegatives[] = $A[$i];
                }
            }
        }

        $maxproduct = null;
        $values = array_merge($allPositives, $allNegatives, $twoNegatives);
        $count = count($values);

        for ($i = 0; $i < $count - 2; $i++) {
            for ($j = $i + 1; $j < $count - 1; $j++) {
                for ($k = $j + 1; $k < $count; $k++) {
                    $product = $values[$i] * $values[$j] * $values[$k];
                    if(empty($maxproduct) || $product > $maxproduct)
                        $maxproduct = $product;
                }
            }
        }

        return $maxproduct;
    }
}
