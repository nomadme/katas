<?php

namespace spec;

use MarkDown;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MarkDownSpec extends ObjectBehavior
{
    function it_converts_plain_text_to_html_paragraphs()
    {
        $this->toHtml("Hi, there")->shouldReturn("<p>Hi, there</p>");
    }
}
