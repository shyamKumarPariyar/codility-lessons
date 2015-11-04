<?php

namespace Lesson08;

class MinPerimeterRectangle
{
    public function solution($N)
    {
        $root = (int) ceil(sqrt($N));
        $min = PHP_INT_MAX;
        for ($i = 1; $i <= $root; $i++) {
            if ($N % $i === 0) {
                $j = $N / $i;
                if ($i + $j < $min) {
                    $min = $i + $j;
                }
            }
        }

        return 2 * $min;
    }
}
