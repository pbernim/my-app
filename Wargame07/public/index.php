<?php

namespace Styde;

require '../vendor/autoload.php';

$armor = new Armors\BronzeArmor();
$ramm = new Soldier('Ramm');
$pepe = new Archer('Pepín');


# $pepe->move('el norte');
$pepe->attack($ramm);
$ramm->setArmor(new Armors\CursedArmor);
$pepe->attack($ramm);

$ramm->attack($pepe);

echo 1;