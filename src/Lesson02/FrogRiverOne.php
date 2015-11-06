<?php

namespace Lesson02;

class FrogRiverOne
{
    public function solution ($X, $A)
    {
        $minimumTime = -1;
        $uniques = array_unique($A);
        if (count($uniques) >= $X) {
            $allKeys = array_keys($uniques);
            $minimumTime = max($allKeys);
        }

        return $minimumTime;
    }
}
