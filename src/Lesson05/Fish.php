<?php

namespace Lesson05;

class Fish
{
    public function solution ($A, $B)
    {
        $N = count($A);
        $stack = [];
        for ($i = 0; $i < $N; $i++) {
            $size = $A[$i];
            $direction = $B[$i];
            if ($i == 0) {
                array_push($stack, [$size, $direction]);
            } else {
                $v = array_pop($stack);
                while ($v[1] > $direction) {
                    if ($v[0] > $size) {
                        $size = $v[0];
                        $direction = $v[1];
                    }
                    $v = array_pop($stack);
                }
                if ($v !== null && $v[0] !== $size) {
                    array_push($stack, [$v[0], $v[1]]);
                }
                array_push($stack, [$size, $direction]);
            }
        }

        return count($stack);
    }
}
