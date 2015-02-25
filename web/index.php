<?php require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application;
$app['debug'] = true;

$greeter = new Greeter;

$app->get('/translate/{language}',
	function ($language) use ($greeter)
	{
		$greeter->setLanguage($language);
		$greeting = $greeter->getGreeting();
		$page = "<div><span class=greeting>$greeting</span></div>";
		return $page;
	}
);

$app->run();