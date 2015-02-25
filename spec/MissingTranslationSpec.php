<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MissingTranslationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('MissingTranslation');
        $this->shouldHaveType('RuntimeException');
    }
}
