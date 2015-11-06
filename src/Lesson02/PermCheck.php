<?php

namespace Lesson02;

class PermCheck
{
    public function solution ($A)
    {
        $countValues = array_count_values($A);
        if (max($A) == count($countValues)) {
            if (min($countValues) == max($countValues) && min($countValues) == 1) {
                return 1;
            }
        }

        return 0;
    }
}
