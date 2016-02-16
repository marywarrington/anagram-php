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

		function formatWord($word) {
			$split = str_split($word);
			sort($split, SORT_NATURAL | SORT_FLAG_CASE);
			$imploded = implode($split);
			return $imploded;
		}


		function formatList(){
			foreach($this->anagrams as $key => $gram){
				$this->anagrams[$key] = $this->formatWord($gram);
			}
			return $this->anagrams;
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
