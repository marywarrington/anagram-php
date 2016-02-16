<?php

	require_once __DIR__.'/../vendor/autoload.php';

	$app = new Silex\Application();

	$app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

	$app->get('/', function() use ($app){
		// Possible code to use for instantiating a new Anagram object
		// $anagrams = $_POST['anagrams'];
		// $stripped = strip out commas
		// $split = split string into an array, each element is it's own word
		//
		// $new_anagram = new Anagram($_POST['word'], $split)
	
	});

	return $app;

?>
