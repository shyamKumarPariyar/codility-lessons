<?php

namespace Lesson04;

class Triangle
{
    public function solution ($A)
    {
        $count = count($A);
        sort($A);
        for ($i = 0; $i < $count - 2; $i++) {
            $p = $A[$i];
            $q = $A[$i + 1];
            $r = $A[$i + 2];
            if ($p + $q > $r && $q + $r > $p && $r + $p > $q) {
                return 1;
            }
        }

        return 0;
    }
}
