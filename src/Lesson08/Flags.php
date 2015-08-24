<?php

namespace Lesson08;

class Flags
{

    function solution($A)
    {
        $N = count($A);
        $peaks = [];
        for ($i = 1; $i < $N - 1; $i++) {
            if ($A[$i] > $A[$i - 1] && $A[$i] > $A[$i + 1]) {
                $peaks[] = $i;
            }
        }
        $numberOfPeaks = count($peaks);

        $a = 1;
        $b = -1;
        $c = -($N - 1);
        $d = $b * $b - 4 * $a * $c;
        $x1 = (-$b + sqrt($d)) / (2 * $a);
        $x2 = (-$b - sqrt($d)) / (2 * $a);
        $maxFlags = min($numberOfPeaks, max($x1, $x2));

        for ($flags = intval($maxFlags); $flags > 0; $flags--) {
            $remainingFlags = $flags;
            $previousPeak = null;
            $currentPeak = 0;
            while ($currentPeak < $numberOfPeaks && $remainingFlags > 0) {
                if ($previousPeak === null || $peaks[$currentPeak] - $peaks[$previousPeak] >= $flags) {
                    $remainingFlags--;
                    $previousPeak = $currentPeak;
                }
                $currentPeak++;
            }
            if ($remainingFlags == 0) {
                return $flags;
            }
        }
        return 0;
    }
}
