<?php

function show($message)
{
	echo "<p>$message</p>"; 
}

abstract class Unit 
{
	protected $hp = 40;
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function getName() 
	{
		return $this->name;
	}

	public function getHp()
	{
		return $this->hp;
	}

	public function move($direction) 
	{
		show("{$this->name} avanza hacia $direction</p>");
	}

	abstract public function attack(Unit $opponent);

	public function takeDamage($damage)
	{
		$this->setHp($this->hp - $damage);

		if($this->hp <= 0) {
			$this->die();
		}
	}

	public function die() 
	{
		show("{$this->name} muere");
	}

	private function setHp($points)
	{
		$this->hp = $points;
		show("{$this->name} ahora tiene {$this->hp} puntos de vida");
	}

}



class Soldier extends Unit 
{
	protected $damage = 40;

	public function attack(Unit $opponent)
	{
		show("{$this->name} ataca con la espada a {$opponent->getName()}");

		$opponent->takeDamage($this->damage);
	}

	public function takeDamage($damage)
	{
		return parent::takeDamage($damage / 2);
	}
}



class Archer extends Unit 
{
	protected $damage = 20;

	public function attack(Unit $opponent) 
	{
		show("{$this->name} dispara una flecha a {$opponent->getName()}");
		
		$opponent->takeDamage($this->damage);
	}

	public function takeDamage($damage)
	{
		if(rand(0,1) == 1) {
			return parent::takeDamage($damage);
		} else {
			show("$this->name esquiva el ataque");
		}
		
	}

}


$pepe = new Archer('Pepín');
$ramm = new Soldier('Ramm');

# $pepe->move('el norte');
$pepe->attack($ramm);
$pepe->attack($ramm);

$ramm->attack($pepe);

echo 1;