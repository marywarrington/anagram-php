<?php

	require_once 'src/Anagram.php';

	class AnagramTest extends PHPUnit_Framework_TestCase
	{

		function test_sortUserWord_oneWord()
		{
		//Arrange
		$test_Anagram = new Anagram("teacher", 'come on you guys');

		//Act
		$result = $test_Anagram->sortUserWord($test_Anagram->getWord());

		//Assert
		$this->assertEquals(['a', 'c', 'e', 'e', 'h', 'r', 't'], $result);
		}
	}

?>
