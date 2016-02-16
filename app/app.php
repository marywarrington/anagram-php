<?php

	require_once __DIR__.'/../vendor/autoload.php';
	require_once __DIR__.'/../src/Anagram.php';

	$app = new Silex\Application();

	$app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

	$app->get('/', function() use ($app){
		return $app['twig']->render('anagram.html.twig');
	});

	$app->post('/results', function() use ($app){
		$grams = array();

		$i = 1;
		while ($i <= 3){
			$grams[$_POST['anagram'.$i]] = $_POST['anagram'.$i];
			$i++;
		}

		$anagram = new Anagram($_POST['word'], $grams);

		$matches = array_keys($anagram->checkList());
		$fails = array_keys($anagram->getFailedItems());

		return $app['twig']->render('anagram.html.twig', array('matches' => $matches,'fails' => $fails));
	});

	return $app;

?>
