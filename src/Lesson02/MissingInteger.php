<?php

namespace Lesson02;

class MissingInteger
{
    public function solution ($A)
    {
        $uniquePositives = array_unique(array_filter($A, function($number) {
            return $number > 0;
        }));

        $missingNumber = 1;
        $count = count($uniquePositives);

        if ($count > 0) {
            if ($count > 1) {
                asort($uniquePositives);
            }

            $sortedUniques = array_values($uniquePositives);
            $sortedUniquesCount = count($sortedUniques);

            for ($i = 0; $i < $sortedUniquesCount; $i++) {
                if ($sortedUniques[$i] > ($i + 1)) {
                    $missingNumber = $i + 1;
                    break;
                }
            }

            if ($i == $sortedUniquesCount) {
                $missingNumber = $i + 1;
            }
        }

        return $missingNumber;
    }
}
