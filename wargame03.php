<?php


abstract class Unit 
{
	protected $alive;
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function move($direction) {
		echo "<p>{$this->name} avanza hacia $direction</p>";
	}

	abstract public function attack($opponent);

}

class Soldier extends Unit 
{
	public function attack($opponent) {
		echo "<p>{$this->name} ataca con la espada a $opponent</p>";
	}
}

class Archer extends Unit 
{
	public function attack($opponent) {
			echo "<p>{$this->name} dispara una flecha a $opponent</p>";
		}
}


$pepe = new Soldier('Pepín');
$pepe->move('el norte');
$pepe->attack('Ramm');

echo 1;