<?php

namespace Lesson07;

class MaxSliceSum
{

    function solution($A)
    {
        $N = count($A);
        $maxSum = $A[0];
        $maxSumAfter = $A[0];
        for ($i = 1; $i < $N; $i++) {
            $maxSumAfter = max($A[$i], $maxSumAfter + $A[$i]);
            $maxSum = max($maxSum, $maxSumAfter);
        }
        return $maxSum;
    }
}
