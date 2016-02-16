<?php

	require_once 'src/Anagram.php';

	class AnagramTest extends PHPUnit_Framework_TestCase
	{

		function test_formatWord_oneWord()
		{
			//Arrange
			$test_Anagram = new Anagram("teacher", 'come on you guys');
			$input = "teacher";
			//Act
			$result = $test_Anagram->formatWord($input);

			//Assert
			$this->assertEquals('aceehrt', $result);
		}

		function test_formatList_oneWord()
		{
			//Arrange
			$test_Anagram = new Anagram("teacher", array('cheater' => 'cheater'));

			//Act
			$result = $test_Anagram->formatList($test_Anagram->getAnagrams());

			//Assert
			$this->assertEquals(array('cheater' => 'aceehrt'), $result);
		}

		function test_formatList_multipleWords()
		{
			//Arrange
			$test_Anagram = new Anagram("teacher", array('cheater' => 'cheater', 'hectare' => 'hectare', 'recheat' => 'recheat'));

			//Act
			$result = $test_Anagram->formatList($test_Anagram->getAnagrams());

			//Assert
			$this->assertEquals(array('cheater' => 'aceehrt', 'hectare' => 'aceehrt', 'recheat' => 'aceehrt'), $result);
		}

		function test_checkList_oneWord(){
			//Arrange
			$test_Anagram = new Anagram("teacher", array("cheater" => "cheater"));
			//Act
			$result = $test_Anagram->checkList();
			//Assert
			$this->assertEquals(array('cheater' => 'aceehrt'), $result);
		}

		function test_checkList_multipleWords(){
			//Arrange
			$test_Anagram = new Anagram("teacher", array('cheater' => 'cheater', 'hectare' => 'hectare'));
			//Act
			$result = $test_Anagram->checkList();
			//Assert
			$this->assertEquals(array('cheater' => 'aceehrt', 'hectare' => 'aceehrt'), $result);
		}

		function test_checkList_failedWords(){
			//Arrange
			$test_Anagram = new Anagram("teacher", array('cheater' => 'cheater', 'pumpkin' => 'pumpkin'));
			//Act
			$resultSuccess = $test_Anagram->checkList();
			$resultFail = $test_Anagram->getFailedItems();

			//Assert
			$this->assertEquals(array('pumpkin' => 'ikmnppu'), $resultFail);
			$this->assertEquals(array('cheater' => 'aceehrt'), $resultSuccess);
		}


	}

?>
