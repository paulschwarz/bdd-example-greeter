<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;

class WebGreeterContext extends \Behat\MinkExtension\Context\RawMinkContext implements Context, SnippetAcceptingContext {

	private $language;

	/**
	 * @Given I speak :language
	 * @param string $language
	 */
	public function iSpeak($language)
	{
		$this->language = $language;
	}

	/**
	 * @Then I should see :greeting
	 * @param string $greeting
	 */
	public function iShouldSee($greeting)
	{
		$this->visitPath('/translate/'.$this->language);
		$this->assertSession()->elementExists('css', ".greeting:contains('$greeting')");
	}

	/**
	 * @Then I should see an error
	 */
	public function iShouldSeeAnError()
	{
		$this->visitPath('/translate/'.$this->language);
		$this->assertSession()->statusCodeEquals(500);
	}

}