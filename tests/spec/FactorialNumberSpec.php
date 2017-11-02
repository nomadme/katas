<?php

namespace spec;

use FactorialNumber;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FactorialNumberSpec extends ObjectBehavior
{
    function it_returns_1_for_1()
    {
        $this->findFactor(1)->shouldReturn(1);
    }

    function it_returns_2_for_2()
    {
        $this->findFactor(2)->shouldReturn(2);
    }

    function it_returns_6_for_3()
    {
        $this->findFactor(3)->shouldReturn(6);
    }

    function it_returns_24_for_4()
    {
        $this->findFactor(4)->shouldReturn(24);
    }

    function it_returns_120_for_5()
    {
        $this->findFactor(5)->shouldReturn(120);
    }

    function it_returns_720_for_6()
    {
        $this->findFactor(6)->shouldReturn(720);
    }

    function it_returns_5040_for_7()
    {
        $this->findFactor(7)->shouldReturn(5040);
    }

    function it_returns_40320_for_8()
    {
        $this->findFactor(8)->shouldReturn(40320);
    }

    function it_returns_362880_for_9()
    {
        $this->findFactor(9)->shouldReturn(362880);
    }

    function it_returns_3628800_for_10()
    {
        $this->findFactor(10)->shouldReturn(3628800);
    }
}
