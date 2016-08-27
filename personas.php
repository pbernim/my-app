<?php


class Person {

	protected $firstName;
	protected $lastName;

	public function __construct($firstName, $lastName) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	public function setFirstName($firstName) {
		$this->firstName = $firstName;
	}

	public function fullName() {
		echo "{$this->firstName} {$this->lastName}";
	}

}

$pepe = new Person('Piero', 'Berni');

$pepe->fullName();

$pepe->setFirstName('Juan');

$pepe->fullName();

echo '<br> OK!';