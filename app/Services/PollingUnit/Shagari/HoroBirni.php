<?php
namespace App\Services\PollingUnit\Shagari;
/**
* this class will return the array of its polling unit
*/
class HoroBirni
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			['SHIYYAR DAN GALADIMA',420],
			['SHIYAR MAGAJI BAKIN KASUWA',608],
			['SHIYAR DIKKO ‐ HORO PRI.SCHOOL',738],
			['HORO DANBARO SHYAR WALI - SHIGAR WALI',325],
			['HORO DANBARO SHIYAR UBAN DAWAKI',474],
			['SABARA M.P.S',351],
			['RUGGAR YARA/DUSTE',549],
			['BIRI ZANGO',519],
			['KAURARE/KAURARE',269],
			['GIDAN AGIGGI',350]
		];
	}
}
