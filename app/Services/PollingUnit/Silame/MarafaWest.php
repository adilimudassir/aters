<?php

namespace App\Services\PollingUnit\Silame;

/**
* this class will return the polling units of all the 
*/
class MarafaWest
{
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return[
			['TUNGAR ABDU/SHIYAR MAGAJI', 543],
			['TUNGAR MAMBA/SHIYAR MAGAJI', 346],
			['TUNGAR YARO SHIYAR MAGAJI', 722],
			['GIDAN TUDU SHIYAR MAGAJI', 460],
			['MAJE SHIYAR NOMA/BURTALI', 608] ,
			['MAJEN SANYINNA SHIYAR SANYINNA', 805]
		];
	}
}