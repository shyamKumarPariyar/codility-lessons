<?php

namespace Lesson05;

class StoneWall
{
    public function solution ($H)
    {
        $N = count($H);
        $blocks = 0;
        $stack = [];
        $stack_position = 0;
        for ($i = 0; $i < $N; $i++) {
            while ($stack_position > 0 && $stack[$stack_position - 1] > $H[$i]) {
                $stack_position--;
            }
            if (!($stack_position > 0 && $stack[$stack_position - 1] == $H[$i])) {
                $blocks++;
                $stack[$stack_position] = $H[$i];
                $stack_position++;
            }
        }

        return $blocks;
    }
}
