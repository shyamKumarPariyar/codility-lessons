<?php

namespace Lesson03;

class GenomicRangeQuery
{
    public function solution ($S, $P, $Q)
    {
        $queries = count($P);
        $output = [];
        for ($i = 0; $i < $queries; $i++) {
            $temp = substr($S, $P[$i], $Q[$i] - $P[$i] + 1);

            if (strpos($temp, 'A') !== false) {
                $output[] = 1;
                continue;
            }
            if (strpos($temp, 'C') !== false) {
                $output[] = 2;
                continue;
            }
            if (strpos($temp, 'G') !== false) {
                $output[] = 3;
                continue;
            }
            $output[] = 4;
        }

        return $output;
    }
}
