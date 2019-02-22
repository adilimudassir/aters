<?php

namespace App\Services\PollingUnit\Silame;

/**
* this class will return the polling units of all the 
*/
class KatamiNorth
{
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return[
			['SHIYAR MAGAJI', 1,193],
			['SHIYAR TASALYA', 716],
			['SHIYAR TASALYA/FILIN NAAKKA', 772],
			['RAIRAN FULANI GIDAN MAGAJI', 553],
			['GUJIYA / GIDAN MAGAJI', 642],
			['TUNGAR DADI/ GARKAR HAKIM', 543],
			['TUNGAR ATTO/GIDAN HAKIMI', 490],
			['SHIYAR TASALYA/TSOHON KANWURI', 791]     
		];
	}
}