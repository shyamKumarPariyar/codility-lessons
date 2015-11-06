<?php

namespace Lesson04;

class NumberOfDiscIntersections
{
    public function solution ($A)
    {
        $N = count($A);
        $numberOfIntersectingDiscs = 0;
        $numberOfDiscsStartedAt = array_fill(0, $N, 0);
        $numberOfDiscsEndedAt = array_fill(0, $N, 0);

        for ($i = 0; $i < $N; $i++) {
            $startingIndex = $i - $A[$i] > 0 ? $i - $A[$i] : 0;
            $endingIndex = $i + $A[$i] < $N - 1 ? $i + $A[$i] : $N - 1;
            $numberOfDiscsStartedAt[$startingIndex]++;
            $numberOfDiscsEndedAt[$endingIndex]++;
        }

        $discsAtCurrentPosition = 0;

        for ($i = 0; $i < $N; $i++) {
            if ($numberOfDiscsStartedAt[$i] > 0) {
                $numberOfIntersectingDiscs += $discsAtCurrentPosition * $numberOfDiscsStartedAt[$i];
                $numberOfIntersectingDiscs +=
                    $numberOfDiscsStartedAt[$i] * ($numberOfDiscsStartedAt[$i] - 1) / 2;
                if ($numberOfIntersectingDiscs > 10000000) {
                    return -1;
                }
                $discsAtCurrentPosition += $numberOfDiscsStartedAt[$i];
            }
            $discsAtCurrentPosition -= $numberOfDiscsEndedAt[$i];
        }

        return $numberOfIntersectingDiscs;
    }
}
