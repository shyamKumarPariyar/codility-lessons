<?php

namespace Lesson07;

class MaxDoubleSliceSum
{
    public function solution($A)
    {
        $N = count($A);
        $leftSums = array_fill(0, $N, 0);
        $rightSums = array_fill(0, $N, 0);

        for ($i = 1; $i < ($N - 1); $i++) {
            $leftSums[$i] = max(0, $leftSums[$i - 1] + $A[$i]);
        }
        for ($i = $N - 2; $i > 0; $i--) {
            $rightSums[$i] = max(0, $rightSums[$i + 1] + $A[$i]);
        }

        $maxSum = 0;
        for ($i = 1; $i < ($N - 1); $i++) {
            $sliceSum = $leftSums[$i - 1] + $rightSums[$i + 1];
            if ($sliceSum > $maxSum) {
                $maxSum = $sliceSum;
            }
        }

        return $maxSum;
    }
}
