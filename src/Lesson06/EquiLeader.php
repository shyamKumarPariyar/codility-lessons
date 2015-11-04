<?php

namespace Lesson06;

class EquiLeader
{
    public function solution($A)
    {
        $N = count($A);
        if ($N > 1) {
            $count = array_count_values($A);
            arsort($count);
            $max = 0;
            $maxValue = 0;
            foreach ($count as $key => $value) {
                if ($value > (int) ($N / 2)) {
                    $max = $key;
                    $maxValue = $value;
                    break;
                } else {
                    return 0;
                }
            }
            $equiCounter = 0;
            $leftLeader = 0;
            foreach ($A as $key => $value) {
                if ($value == $max) {
                    $leftLeader++;
                }
                if ($leftLeader > ($key + 1) / 2 && ($maxValue - $leftLeader) > ($N - $key - 1) / 2) {
                    $equiCounter++;
                }
            }

            return $equiCounter;
        }

        return 0;
    }
}
