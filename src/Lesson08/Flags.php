<?php

namespace Lesson08;

class Flags
{
    public function solution($A)
    {
        $arrayCount = count($A);
        $peaks = [];
        for ($i = 1; $i < $arrayCount - 1; $i++) {
            if ($A[$i] > $A[$i - 1] && $A[$i] > $A[$i + 1]) {
                $peaks[] = $i;
            }
        }
        $numberOfPeaks = count($peaks);

        $maxFlags = $this->getMaxFlags($arrayCount, $numberOfPeaks);

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

    /**
     * @param $arrayCount
     * @param $numberOfPeaks
     *
     * @return mixed
     */
    private function getMaxFlags($arrayCount, $numberOfPeaks)
    {
        $quadraticCoefficient = 1;
        $linearCoefficient = -1;
        $constant = -($arrayCount - 1);
        $numerator = $linearCoefficient * $linearCoefficient - 4 * $quadraticCoefficient * $constant;
        $firstX = (-$linearCoefficient + sqrt($numerator)) / (2 * $quadraticCoefficient);
        $secondX = (-$linearCoefficient - sqrt($numerator)) / (2 * $quadraticCoefficient);
        $maxFlags = min($numberOfPeaks, max($firstX, $secondX));

        return $maxFlags;
    }
}
