<?php

namespace Lesson02;

class MissingInteger
{
   function solution($A) {
        sort($A);
        $missingNumber = 1;
        foreach($A as $value)
        {
            if($value == $missingNumber) 
                $missingNumber++;
        }
        return $missingNumber;
    }
}
