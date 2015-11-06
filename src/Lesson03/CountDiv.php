<?php

namespace Lesson03;

class CountDiv
{
    public function solution ($A, $B, $K)
    {
        $count = floor($B / $K) - floor($A / $K);
        if ($A % $K === 0) {
            $count++;
        }

        return (int) $count;
    }
}
