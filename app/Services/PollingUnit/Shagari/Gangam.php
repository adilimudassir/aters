<?php
namespace App\Services\PollingUnit\Shagari;
/**
* this class will return the array of its polling unit
*/
class Gangam
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			['GAMGAM ‐ MODEL PRI.SCHOOL',948],
			['GAMGAM ‐ BADI',738],
			['RUGGAR BUDA MPS (RUGGAR BUDA)',539],
			['TAKALMAWA/TAKALMAWA',532],
			['LUNGU',619],
			['TUNGAR BARKI',615],
			['ASKE DODO',429],
			['BANGA HURDU',373],
			['YANDUN DAJI',171],
			['LOKOKA',318]
		];
	}
}
