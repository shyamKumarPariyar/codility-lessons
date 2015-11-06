<?php

namespace Lesson03;

class MinAvgTwoSlice
{
    public function solution ($A)
    {
        $position = 0;
        $count = count($A);
        $minAvg = ($A[0] + $A[1]) / 2;

        for ($p = 0; $p < $count - 1; $p++) {
            $avg = ($A[$p] + $A[$p + 1]) / 2;
            if ($avg < $minAvg) {
                $minAvg = $avg;
                $position = $p;
            }

            if (isset($A[$p + 2])) {
                $avg = ($A[$p] + $A[$p + 1] + $A[$p + 2]) / 3;
                if ($avg < $minAvg) {
                    $minAvg = $avg;
                    $position = $p;
                }
            }
        }

        return $position;
    }
}
