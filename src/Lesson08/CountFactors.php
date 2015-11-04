<?php

namespace Lesson08;

class CountFactors
{
    public function solution($N)
    {
        $root = (int) ceil(sqrt($N));
        $numberOfFactors = [];
        for ($i = 1; $i <= $root; $i++) {
            if ($N % $i === 0) {
                $j = $N / $i;
                $numberOfFactors[] = $i;
                $numberOfFactors[] = $j;
            }
        }

        return count(array_unique($numberOfFactors));
    }
}
