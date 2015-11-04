<?php

namespace spec\Lesson09;

use PhpSpec\ObjectBehavior;

class CountNonDivisibleSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Lesson09\CountNonDivisible');
    }

    public function it_should_return_2_4_3_2_0_for_3_1_2_3_6()
    {
        //        $rustart = getrusage();
        $this->solution([3, 1, 2, 3, 6])->shouldReturn([2, 4, 3, 2, 0]);
//        $ru = getrusage();
//        echo "\nThis process used " . self::rutime($ru, $rustart, "utime") .
//            " ms for its computations\n";
//        echo "It spent " . self::rutime($ru, $rustart, "stime") .
//            " ms in system calls\n\n";
    }

//    function it_should_return_large_for_large()
//    {
//        $rustart = getrusage();
//        $input = [];
//        $output = [];
//        $X = 20000;
//        for ($i = 1; $i <= $X; $i++) {
//            $input[] = $i;
//        }
//        for ($i = $X - 1; $i >= 0; $i--) {
//            $output[] = $i;
//        }
//
//        $temp = $this->solution($input);
//        $ru = getrusage();
//        echo "\nThis process used " . self::rutime($ru, $rustart, "utime") .
//            " ms for its computations\n";
//        echo "It spent " . self::rutime($ru, $rustart, "stime") .
//            " ms in system calls\n\n";
//        $temp->shouldReturn($output);
//    }

    public function rutime($ru, $rus, $index)
    {
        return ($ru["ru_$index.tv_sec"] * 1000 + intval($ru["ru_$index.tv_usec"] / 1000))
        - ($rus["ru_$index.tv_sec"] * 1000 + intval($rus["ru_$index.tv_usec"] / 1000));
    }
}
