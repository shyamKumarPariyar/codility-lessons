<?php

namespace Lesson01;

class PermMissingElem
{
    public function solution ($A)
    {
        $missing = 1;
        $count = count($A);
        sort($A);
        for ($i = 0; $i < $count; $i++) {
            if ($A[$i] != $i + 1) {
                $missing = $i + 1;
                break;
            }
        }
        if ($i == $count) {
            $missing = $count + 1;
        }

        return $missing;
    }
}
