<?php

namespace Lesson05;

class Brackets
{
    public function solution ($S)
    {
        $length = strlen($S);
        $map = [')' => '(', '}' => '{', ']' => '['];
        if ($length) {
            $parentheses = [];
            for ($i = 0; $i < $length; $i++) {
                $c = $S[$i];
                if ($c == '(' || $c == '{' || $c == '[') {
                    array_push($parentheses, $c);
                } elseif ($c == ')' || $c == '}' || $c == ']') {
                    if (empty($parentheses)) {
                        return 0;
                    }
                    $v = array_pop($parentheses);
                    if ($map[$c] != $v) {
                        return 0;
                    }
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
