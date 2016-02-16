<?php
	 class Anagram
		{
		private $word;
		private $anagrams;

		function __construct($word, $anagrams)
		{
			$this->word = $word;
			$this->anagrams = $anagrams;
		}

		function getWord(){
			return $this->word;
		}

		function setWord($word){
			$this->word = $word;
		}

		function getAnagrams(){
			return $this->anagrams;
		}

		function setAnagrams($anagrams){
			$this->anagrams = $anagrams;
		}

		function sortUserWord() {
			$split = str_split($this->word);
			sort($split, SORT_NATURAL | SORT_FLAG_CASE);
			return $split;
		}

		// function checkForAnagrams($word){
		// $grams = $new_anagram->getAnagram();
		//
		// foreach($grams as $key => $gram){
		// 	$split = str_split($gram);
		// 	sort($split, SORT_NATURAL | SORT_FLAG_CASE);
		// 	$imploded = implode($split);
		// 	$key => $imploded;
		// }
	}
 ?>
