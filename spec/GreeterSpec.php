<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GreeterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Greeter');
    }

	function it_has_a_language()
	{
		$this->setLanguage('English');
		$this->getLanguage()->shouldReturn('English');
	}

	function it_maps_languages_to_greetings()
	{
		$this->setLanguage('English');
		$this->getGreeting()->shouldReturn('hello');
	}

	function it_handles_missing_language_translations()
	{
		$this->setLanguage('Romanian');
		$this->shouldThrow(new \MissingTranslation)->during('getGreeting');
	}
}
