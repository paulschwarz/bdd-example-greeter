<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;

class DomainGreeterContext implements Context, SnippetAcceptingContext {

	private $greeter;

	public function __construct()
	{
		$this->greeter = new Greeter;
	}

	/**
	 * @Given I speak :language
	 * @param string $language
	 */
	public function iSpeak($language)
	{
		$this->greeter->setLanguage($language);
	}

	/**
	 * @Then I should see :greeting
	 * @param string $greeting
	 */
	public function iShouldSee($greeting)
	{
		PHPUnit_Framework_Assert::assertEquals($greeting, $this->greeter->getGreeting());
	}

	/**
	 * @Then I should see an error
	 */
	public function iShouldSeeAnError()
	{
		try
		{
			$this->greeter->getGreeting();
		}
		catch (MissingTranslation $e){}
	}

}