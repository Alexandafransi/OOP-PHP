<?php
	
	class Person{

			private $FirstName;
			private $SecondName;
			private $LastName;

			public function __construct($FirstName,$SecondName,$LastName){
				$this->FirstName=$FirstName;
				$this->SecondName=$SecondName;
				$this->LastName=$LastName;
			}

			public function set_FirstName($FirstName){

				$this->FirstName;
			}

			public function set_SecondName($SecondName){

				$this->SecondName;
			}


			public function set_LastName($LastName){

				$this->LastName;
			}

			public function get_FirstName(){

				return $this->FirstName;
			}

			public function get_SecondName(){

				return $this->SecondName;
			}

			public function get_LastName(){
				return $this->LastName;
			}


			public function __destruct(){

				echo "<h1>This is the end of class</h1>";
			}


	}



?>