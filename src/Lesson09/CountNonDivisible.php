<?php

namespace Lesson09;

class CountNonDivisible
{
    public function solution($A)
    {
        $N = count($A);
        $countValues = array_count_values($A);
        $occurrences = array_fill(0, $N * 2 + 1, 0);
        $answer = array_fill(0, $N * 2 + 1, 0);
        $result = array_fill(0, $N, 0);
        foreach ($countValues as $key => $value) {
            $occurrences[$key] = $value;
        }

        for ($i = 1; $i <= $N * 2; $i++) {
            $num = $occurrences[$i];
            if ($num == 0) {
                continue;
            }
            for ($j = $i; $j <= $N * 2; $j += $i) {
                $answer[$j] -= $num;
            }
        }

        for ($i = 0; $i < $N; $i++) {
            $result[$i] = $N + $answer[$A[$i]];
        }

        return $result;
    }
}
