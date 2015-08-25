<?php

namespace Lesson09;

class CountSemiprimes
{
    function solution($N, $P, $Q)
    {
        $M = count($P);
        $primes = [];
        for ($i = 2; $i <= $N; $i++) {
            $primes[$i] = $i;
        }

        $i = 2;
        while ($i * $i <= $N) {
            for ($j = $i + $i; $j <= $N; $j += $i) {
                unset($primes[$j]);
            }
            $i++;
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
        $i = 1;
        foreach ($semiPrimes as $value) {
            $semiPrimes[$value] = $i;
            $i++;
        }

        $semiPrimesInRange = [];

        for ($i = 0; $i < $M; $i++) {
            $leftKey = null;
            $rightKey = null;
            $p = $P[$i];
            $q = $Q[$i];
            $range = $q - $p;

            if (array_key_exists($p, $semiPrimes)) {
                $leftKey = $p;
            } else {
                for ($j = 1; $j <= $range; $j++) {
                    if (array_key_exists($p + $j, $semiPrimes)) {
                        $leftKey = $p + $j;
                        break;
                    }
                }
            }

            if (array_key_exists($q, $semiPrimes)) {
                $rightKey = $q;
            } else {
                for ($j = 1; $j <= $range; $j++) {
                    if (array_key_exists($q - $j, $semiPrimes)) {
                        $rightKey = $q - $j;
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
