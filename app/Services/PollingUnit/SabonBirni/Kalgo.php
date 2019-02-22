<?php
namespace App\Services\PollingUnit\SabonBirni;

/**
* this class return the array of polling unit of the class
*/
class Kalgo
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			['KALGO I MPS', 512],
			['KALGO II DANFILI', 600],
			['SARDAUNA GABAS MPS', 470],
			['SARDAUNA YAMMA MASALLACI', 321],
			['TEKE MAIFULOTI', 771],
			['DANGARI ‐ DANGARI', 466],
			['ADAMAWA', 649],
			['DUKKUMA', 407],
			['TASHAR BAGARUWA', 555],
			['GIDAN AUTA', 648],
			['KUKA ‐ KUKA', 554],
			['DANKARMAWA', 856],
			['TSAURAWA', 409]
		];
	}
}