<?php
namespace App\Services\PollingUnit\SabonBirni;

/**
* this class return the array of polling unit of the class
*/
class Lajinge
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			['PRI. SCHOOL ‐ LAJINGE I', 857],
			['PRI. SCHOOL ‐ LAJINGE II', 963],
			['PRI. SCHOOL ‐ DANTUDU I', 600],
			['PRI. SCHOOL ‐ DANTUDU II', 647],
			['PRI. SCHOOL ‐ LANJEGU I', 844],
			['MARAKAWA DANFILI', 878],
			['PRI. SCHOOL ‐ KADAYE', 759],
			['PRI. SCHOOL ‐ JIJJIRA', 969],
			['RUMBUKAWA KADUM ‐ RUMBUKAWA', 484],
			['ALLAKIRU', 469],
			['KUNGURUS ‐ KUNGURUS', 631],
			['DANTUDU‐ DANTUDU', 569]
		];
	}
}
