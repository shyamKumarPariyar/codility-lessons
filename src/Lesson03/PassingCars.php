<?php

namespace Lesson03;

class PassingCars
{
    public function solution ($A)
    {
        $count = count($A);
        $sum = 0;
        $total = 0;
        for ($i = $count - 1; $i >= 0; $i--) {
            if ($A[$i] == 1) {
                $sum++;
            } else {
                $total += $sum;
            }

            if ($total > 1000000000) {
                $total = -1;
                break;
            }
        }

        return $total;
    }
}
