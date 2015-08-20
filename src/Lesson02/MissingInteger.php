<?php

namespace Lesson02;

class MissingInteger
{

    function solution($A)
    {
        $uniquePositives = array_unique(array_filter($A, function ($number) {
            return $number > 0;
        }));

        $missingNumber = 1;
        $count = count($uniquePositives);

        if ($count > 0) {
            if ($count > 1) {
                asort($uniquePositives);
            }

            $sortedUniques = array_values($uniquePositives);

            for ($i = 0; $i < count($sortedUniques); $i++) {
                if ($sortedUniques[$i] > ($i + 1)) {
                    $missingNumber = $i + 1;
                    break;
                }
            }

            if ($i == count($sortedUniques)) {
                $missingNumber = $i + 1;
            }
        }
        return $missingNumber;
    }
}
