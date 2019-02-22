<?php

namespace App\Services\PollingUnit\Silame;

/**
* this class will return the polling units of all the 
*/
class KatamiSouth
{
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return[
			['SHIYAR GANDU/BAKIN KOLI',695],
			['SHIYAR GANDU/KALGO', 673],
			['SHIYAR GANDU/DOGON FILI',593],
			['SHIYAR SAUNA/KASUWA', 924],
			["TAJENERA/FILIN TANERA",298],
			['SHIYAR D/GALADIMA / BOOKO',962],
			['GADAMBE/FILIN GADAMBE',637],
			['SHIYAR ZARUMAI/AGERI', 701],
			['GADAMBE/FILIN GADAMBE',638] 
		];
	}
}