<?php

/*
 * EconomyS, the massive economy plugin with many features for PocketMine-MP
 * Copyright (C) 2013-2016  onebone <jyc00410@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace onebone\economyapi\event;

use onebone\economyapi\EconomyAPI;
use pocketmine\event\Cancellable;
use pocketmine\event\CancellableTrait;
use pocketmine\event\plugin\PluginEvent;

abstract class EconomyAPIEvent extends PluginEvent implements Cancellable{
	use CancellableTrait;

	/** @var string */
	private $issuer;

	public function __construct(EconomyAPI $plugin, string $issuer){
		parent::__construct($plugin);
		$this->issuer = $issuer;
	}

	public function getIssuer() : string{
		return $this->issuer;
	}
}
