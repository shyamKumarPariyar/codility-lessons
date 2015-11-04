<?php

namespace Lesson09;

class CountSemiprimes
{
    public function solution($N, $P, $Q)
    {
        $initialArrayCount = count($P);
        $primes = array_values($this->filterPrimes($N, $this->getPrimes($N)));
        $primeCount = count($primes);
        $semiPrimes = $this->getSemiPrimes($N, $primeCount, $primes);
        ksort($semiPrimes);

        $assignableValue = 1;
        foreach ($semiPrimes as $value) {
            $semiPrimes[$value] = $assignableValue;
            $assignableValue++;
        }

        $semiPrimesInRange = [];

        for ($i = 0; $i < $initialArrayCount; $i++) {
            $pValue = $P[$i];
            $qValue = $Q[$i];
            $range = $qValue - $pValue;

            $leftKey = $this->getKey($pValue, $semiPrimes, $range);
            $rightKey = $this->getKey($qValue, $semiPrimes, $range);

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

    /**
     * @param $N
     *
     * @return array
     */
    private function getPrimes($N)
    {
        $primes = [];
        for ($i = 2; $i <= $N; $i++) {
            $primes[$i] = $i;
        }

        return $primes;
    }

    /**
     * @param $N
     * @param $primes
     *
     * @return int
     */
    private function filterPrimes($N, $primes)
    {
        $initialValue = 2;
        while ($initialValue * $initialValue <= $N) {
            for ($j = $initialValue + $initialValue; $j <= $N; $j += $initialValue) {
                unset($primes[$j]);
            }
            $initialValue++;
        }

        return $primes;
    }

    /**
     * @param $N
     * @param $primeCount
     * @param $primes
     *
     * @return array
     *
     * @internal param $semiPrimes
     */
    private function getSemiPrimes($N, $primeCount, $primes)
    {
        $semiPrimes = [];
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

        return $semiPrimes;
    }

    /**
     * @param $value
     * @param $semiPrimes
     * @param $range
     *
     * @return key
     */
    private function getKey($value, $semiPrimes, $range)
    {
        $key = null;
        if (array_key_exists($value, $semiPrimes)) {
            $key = $value;
        } else {
            for ($j = 1; $j <= $range; $j++) {
                if (array_key_exists($value + $j, $semiPrimes)) {
                    $key = $value + $j;
                    break;
                }
            }
        }

        return $key;
    }
}
