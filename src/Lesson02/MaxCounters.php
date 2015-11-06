<?php

namespace Lesson02;

class MaxCounters
{
    public function solution ($N, $A)
    {
        $output = array_fill(0, $N, 0);
        $count = count($A);
        $maximum = 0;
        $currentMaximum = 0;
        for ($i = 0; $i < $count; $i++) {
            if ($A[$i] == $N + 1) {
                $maximum = $currentMaximum;
            } else {
                $position = $A[$i] - 1;
                if ($output[$position] < $maximum) {
                    $output[$position] = $maximum;
                }
                $output[$position]++;
                if ($currentMaximum < $output[$position]) {
                    $currentMaximum = $output[$position];
                }
            }
        }
        for ($i = 0; $i < $N; $i++) {
            if ($output[$i] < $maximum) {
                $output[$i] = $maximum;
            }
        }

        return $output;
    }
}
