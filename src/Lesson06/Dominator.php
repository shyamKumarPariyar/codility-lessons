<?php

namespace Lesson06;

class Dominator
{
    public function solution ($A)
    {
        $N = count($A);
        if ($N) {
            $count = array_count_values($A);
            arsort($count);
            foreach ($count as $key => $value) {
                if ($value <= (int) ($N / 2)) {
                    return -1;
                } else {
                    return array_search($key, $A);
                }
            }
        }

        return -1;
    }
}
