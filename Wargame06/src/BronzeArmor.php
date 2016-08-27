<?php

namespace Styde;

class BronzeArmor implements Armor
{
	public function absorbDamage($damage) {
		return $damage / 2;
	}
}
