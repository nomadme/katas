<?php

namespace spec;

use PhpSpec\Exception\Example\SkippingException;
use Rocket;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RocketSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Rocket::class);
    }

    function it_flies_around_the_moon(){
//        if (!function_exists('rocketLaunch'))
//        {
//            throw new SkippingException(
//                'The rocket extension is not installed'
//            );
//        }

        $this->flyToMoon();

        return;
    }
}
