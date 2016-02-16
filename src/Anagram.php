<?php
	 class Anagram
		{
		private $word;
		private $anagrams;
		private $failedItems;

		function __construct($word, $anagrams)
		{
			$this->word = $word;
			$this->anagrams = $anagrams;
			$this->failedItems = array();
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

		function getFailedItems()
		{
			return $this->failedItems;
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

		function checkList(){
			$word = $this->formatWord($this->word);
			$resultsArray = array();
			$listItems = $this->formatList();
			foreach ($listItems as $key => $listItem) {
				if ($word == $listItem){
					$resultsArray[$key] = $listItem;
				} else {
					$this->failedItems[$key] = $listItem;
				}
			}
			return $resultsArray;
		}

	}
 ?>
