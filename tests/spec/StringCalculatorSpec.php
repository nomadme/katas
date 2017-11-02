<?php namespace spec;

use InvalidArgumentException;
use StringCalculator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringCalculatorSpec extends ObjectBehavior {

    // String calculator rules:
    // 1. StringCalculator::add('2,3,4') -> should add up the numbers in the string and return 9.
    // 2. StringCalculator::add('') -> If empty string provided, it should return 0.
    // 3. StringCalculator::add('1,2,3,1000') -> should return 6, skip the string 1000.

    function it_translates_an_empty_string_into_zero()
    {
        $this->add('')->shouldEqual(0);
    }

    function it_finds_the_sum_of_one_number()
    {
        $this->add('5')->shouldEqual(5);
    }

    function it_finds_the_sum_of_two_numbers()
    {
        $this->add('1,2')->shouldEqual(3);
    }

    function it_finds_the_sum_of_any_numbers()
    {
        $this->add('1,2,3,4,5')->shouldEqual(15);
    }

    function it_dissallows_negative_numbers()
    {
        $this->shouldThrow(new InvalidArgumentException('Invalid number provided: -2'))->duringAdd('3,-2');
    }

    function it_ignores_any_number_more_than_1000()
    {
        $this->add('2,2, 1000')->shouldEqual(4);
    }

    function it_allows_new_line_delimeter()
    {
        $this->add('2,2\n2')->shouldEqual(6);
    }


}
