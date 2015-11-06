<?php

namespace Lesson04;

class MaxProductOfThree
{
    public function solution ($A)
    {
        sort($A);
        $allPositives = $this->getPositives($A);
        list($allNegatives, $twoNegatives) = $this->getNegatives($A, $allPositives);

        $maxProduct = null;
        $values = array_merge($allPositives, $allNegatives, $twoNegatives);
        $count = count($values);

        for ($i = 0; $i < $count - 2; $i++) {
            for ($j = $i + 1; $j < $count - 1; $j++) {
                for ($k = $j + 1; $k < $count; $k++) {
                    $product = $values[$i] * $values[$j] * $values[$k];
                    if (empty($maxProduct) || $product > $maxProduct) {
                        $maxProduct = $product;
                    }
                }
            }
        }

        return $maxProduct;
    }

    /**
     * @param $A
     *
     * @return array
     *
     * @internal param $arrayCount
     * @internal param $allPositives
     */
    private function getPositives ($A)
    {
        $arrayCount = count($A);
        $allPositives = [];
        for ($i = $arrayCount - 3; $i < $arrayCount; $i++) {
            if ($A[$i] >= 0) {
                $allPositives[] = $A[$i];
            }
        }

        return $allPositives;
    }

    /**
     * @param $A
     * @param $allPositives
     *
     * @return array
     *
     * @internal param $arrayCount
     * @internal param $allNegatives
     * @internal param $twoNegatives
     */
    private function getNegatives ($A, $allPositives)
    {
        $arrayCount = count($A);
        $allNegatives = [];
        $twoNegatives = [];
        if (count($allPositives) === 0) {
            for ($i = $arrayCount - 3; $i < $arrayCount; $i++) {
                if ($A[$i] < 0) {
                    $allNegatives[] = $A[$i];
                }
            }

            return [$allNegatives, $twoNegatives];
        } else {
            for ($i = 0; $i < 2; $i++) {
                if ($A[$i] < 0) {
                    $twoNegatives[] = $A[$i];
                }
            }

            return [$allNegatives, $twoNegatives];
        }
    }
}
