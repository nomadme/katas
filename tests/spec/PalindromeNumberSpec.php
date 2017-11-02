<?php namespace spec;

use PalindromeNumber;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PalindromeNumberSpec extends ObjectBehavior {

    // Palindrome number is a number remains same after revers.

    function it_returns_the_same_number()
    {
        $this->check(99)->shouldReturn(99);
    }
}