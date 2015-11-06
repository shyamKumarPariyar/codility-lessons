<?php

namespace Lesson04;

class Distinct
{
    public function solution ($A)
    {
        /*
         * Long Solution:
         *
         * sort($A);
         * $count = count($A);
         * $unique = 0;
         * if ($count > 0) {
         *     $temp = $A[0];
         *     $unique++;
         *     for ($i = 1; $i < $count; $i++) {
         *         if ($A[$i] > $temp) {
         *             $unique++;
         *             $temp = $A[$i];
         *         }
         *     }
         * }
         * return $unique;
         */

        /*
         * Shortest Solution:
         */
        return count(array_unique($A));
    }
}
