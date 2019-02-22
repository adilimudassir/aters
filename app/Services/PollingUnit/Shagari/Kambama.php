<?php
namespace App\Services\PollingUnit\Shagari;
/**
* this class will return the array of its polling unit
*/
class Kambama
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			['SABON GARI/SHIYAR MAGAJI ‐ PRI.SCHOOL/SHIYAR MAGAJI KANBAMA',895],
			['DAN HILI (SHIYAR DANGALADIMA)',712],
			['DAN HILI (MAZOJI MAGAJI GARKAR HAKIMI)',520],
			['M P.S. SULLUBAWA (SULLUBAWA GARKAR HAKIMI)',663],
			['RINAYE/SHIYAR TUDU',274],
			['M.P.S RINAYE (RINAYE SHIYAR HAKIMI)',328],
			['TUDUN SAMBERU',272],
			['GIDAN HUSAINI OPEN SPACE (GIDAN HUSAINI)',285],
			['GWARGAWO',261]
		];
	}
}
