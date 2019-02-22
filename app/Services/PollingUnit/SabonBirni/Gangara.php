<?php
namespace App\Services\PollingUnit\SabonBirni;

/**
* this class return the array of polling unit of the class
*/
class Gangara
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			['SHIYAR MAGAJI', 857],
			['SHIYAR AJIYA', 625],
			['BARAYA KASUWA', 591],
			['BARAYA B. ASIBITI', 707],
			['SHIYAR YANUSA ‐ SHIYAR YANUSA', 560],
			['MAKWARUWA', 467],
			['SHADDAWA', 602],
			['DANBISO OPEN SPACE', 417],
			['DAN‐BIZO DADIN KOWA', 500],
			['DANTASAKKO I', 137],
			['GIDAN GYARA', 787],
			['ATTALAWA I', 543],
			['ATALAWA II', 280]
		];
	}
}