<?php
namespace App\Services\PollingUnit\Shagari;
/**
* this class will return the array of its polling unit
*/
class Mandera
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			['MANDERA ‐ SHIYAR AJIYA',697],
			['MPS MANDERA (SHIYAR ZARUMAI)',529],
			['HAUSARE ‐ SHIYAR HAKIMI',506],
			['DARIN GURU ‐ SHIYAR HAKIMI',950],
			['DARIN GURU ‐ SHIYAR YAMMA',648],
			['GIDAN TUDU SHIYAR GABAS',537],
			['GIDAN TUDU ‐ SHIYAR SABINI BIRNI',655],
			['GIDAN BUHARI',456],
			['DARHAMAN',446],
			['SEBORE',310],
			['GIDAN GAYYA',393]
		];
	}
}
