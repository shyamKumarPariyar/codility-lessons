<?php

namespace Lesson01;

class FrogJmp
{
    function solution($X, $Y, $D)
    {
        return (int)ceil(($Y-$X)/$D);
    }
}
