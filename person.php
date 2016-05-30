<?php 

class person {

	protected $dob;
	protected $name = '';
	protected $weight;
	protected $height;
	protected $gender;
	public $nickname = '';
	protected $stomachLevel = 0;
	protected $hasShoes = false;

	// Function that runs when you create an instance of this class
	public function __construct($newName, $newWeight=0) {

		// Save the new valuse up inside the properties
		$this->name = $newName;
		$this->weight = $newWeight;
		$this->dob = date('Y-m-d');
	}

	public function eat() {

	}

	public function walk() {

	}

	public function sayBirthday() {

		// Convert the birthday into something that you would say 
		// Convert the date into a timestamp
		$birthdateAsTime = strtotime( $this->dob );

		// Get the day {21st etc}
		$day = date('JS', $birthdateAsTime);

		// Get the month and year {January 2001 etc}
		$monthYear = date('F Y', $birthdateAsTime);

		// Show the browser
		echo '<p>';
		echo "My birthday is on the {$day} of {$monthYear}";
		echo '</p>';
	}

	public function introduceSelf() {
		echo '<p>';
		echo 'Hello, my name is '.$this->name;
		echo '</p>';

	}
}