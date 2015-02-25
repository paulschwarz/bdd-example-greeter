<?php

class Greeter
{
	private
		$language,
		$greetings = [
			'English' => 'hello',
			'French' => 'bonjour',
		];

    public function setLanguage($language)
    {
        $this->language = $language;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function getGreeting()
    {
		if (isset($this->greetings[$this->language]))
		{
			return $this->greetings[$this->language];
		}
		else
		{
			throw new MissingTranslation;
		}
    }
}
