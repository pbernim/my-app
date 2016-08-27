<?php

namespace Styde;

require 'src/helpers.php';

spl_autoload_register(function($className) {
	if(strpos($className, 'Styde\\') == 0) {

		$className = str_replace('Styde\\', '', $className);

		if(file_exists("src/$className.php")){
			require "src/$className.php";
		}
		
	}
	
});

$armor = new BronzeArmor();
$ramm = new Soldier('Ramm');
$pepe = new Archer('Pepín');


# $pepe->move('el norte');
$pepe->attack($ramm);
$ramm->setArmor(new CursedArmor);
$pepe->attack($ramm);

$ramm->attack($pepe);

echo 1;