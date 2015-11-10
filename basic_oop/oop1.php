<?php 

class Person
{
	public $name;
	public $age;
	public $info;

	public function __construct($name,$age) {
		$this->name = $name;
		$this->age = $age;		
	}

	public function setAge($age) {
		$this->age = $age;
	}
	  
	public function getFullName() {
		return $this->name;
	}

	public function getAge() {
		return $this->age;
	}

	public function getPersonInfo() {
		
		$this->info = 'His name is '.$this->getFullName().' and he is '.$this->getAge().' years old'; 

		return $this->info;
	}

}

// initiate Person class

$person = new Person('Ahmad','25');

// get person name

$person_name = $person->getFullName();

// get person age

$person_age = $person->getAge();

// get person info

$person_info = $person->getPersonInfo();

echo $person_info;
echo "<br>"; 

// set person new age

$person->setAge('30');

// get person info

$person_info = $person->getPersonInfo(); 

echo $person_info; 


 ?>