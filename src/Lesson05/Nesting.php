<?php

namespace Lesson05;

class Nesting
{
    public function solution ($S)
    {
        $length = strlen($S);
        if ($length) {
            $parentheses = [];
            for ($i = 0; $i < $length; $i++) {
                if ($S[$i] == '(') {
                    array_push($parentheses, '(');
                } elseif ($S[$i] == ')') {
                    if (empty($parentheses)) {
                        return 0;
                    }
                    array_pop($parentheses);
                }
            }
            if (empty($parentheses)) {
                return 1;
            } else {
                return 0;
            }
        }

        return 1;
    }
}
