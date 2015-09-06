<?php

namespace Lesson09;

class CountSemiprimes
{
    function solution($N, $P, $Q)
    {
        $initialArrayCount = count($P);
        $primes = [];
        for ($i = 2; $i <= $N; $i++) {
            $primes[$i] = $i;
        }

        $initialValue = 2;
        while ($initialValue * $initialValue <= $N) {
            for ($j = $initialValue + $initialValue; $j <= $N; $j += $initialValue) {
                unset($primes[$j]);
            }
            $initialValue++;
        }

        $primes = array_values($primes);
        $semiPrimes = [];
        $primeCount = count($primes);

        for ($i = 0; $i < $primeCount; $i++) {
            for ($j = $i; $j < $primeCount; $j++) {
                $primesProduct = $primes[$i] * $primes[$j];
                if ($primesProduct <= $N) {
                    $semiPrimes[$primesProduct] = $primesProduct;
                } else {
                    break;
                }
            }
        }

        ksort($semiPrimes);
        $assignableValue = 1;
        foreach ($semiPrimes as $value) {
            $semiPrimes[$value] = $assignableValue;
            $assignableValue++;
        }

        $semiPrimesInRange = [];

        for ($i = 0; $i < $initialArrayCount; $i++) {
            $leftKey = null;
            $rightKey = null;
            $pValue = $P[$i];
            $qValue = $Q[$i];
            $range = $qValue - $pValue;

            if (array_key_exists($pValue, $semiPrimes)) {
                $leftKey = $pValue;
            } else {
                for ($j = 1; $j <= $range; $j++) {
                    if (array_key_exists($pValue + $j, $semiPrimes)) {
                        $leftKey = $pValue + $j;
                        break;
                    }
                }
            }

            if (array_key_exists($qValue, $semiPrimes)) {
                $rightKey = $qValue;
            } else {
                for ($j = 1; $j <= $range; $j++) {
                    if (array_key_exists($qValue - $j, $semiPrimes)) {
                        $rightKey = $qValue - $j;
                        break;
                    }
                }
            }

            if ($leftKey === null || $rightKey === null) {
                $semiPrimesInRange[] = 0;
            } elseif ($rightKey === $leftKey) {
                $semiPrimesInRange[] = 1;
            } else {
                $semiPrimesInRange[$i] = $semiPrimes[$rightKey] - $semiPrimes[$leftKey] + 1;
            }
        }
        return $semiPrimesInRange;
    }
}
