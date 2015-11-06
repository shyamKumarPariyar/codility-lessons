<?php

namespace Lesson01;

class FrogJmp
{
    public function solution ($X, $Y, $D)
    {
        return (int) ceil(($Y - $X) / $D);
    }
}
