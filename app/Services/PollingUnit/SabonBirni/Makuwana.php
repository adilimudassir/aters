<?php
namespace App\Services\PollingUnit\SabonBirni;

/**
* this class return the array of polling unit of the class
*/
class Makuwana
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			['FILIN MAGAJI ‐ SHIYAR LADAN', 678],
			['KOFAR DURUMBU ‐ SHIYAR DANGALADIMA', 634],
			['PRI.SCHOOL ‐ FARU', 947],
			['ALKALAWA ‐ ALKALAWA', 1079],
			['YARBULUTU', 667],
			['GARIN MALAMAI ‐ GARIN MALAMAI', 896],
			['ZALLA BANGO ‐ ZALLA BANGO', 702],
			['GARIN FAJI', 888],
			['GARIN BATURE', 870],
			['JINGILMA ‐ JINGILMA', 569],
			['DANBA', 532],
			['KARARI ‐ KARARI', 552],
			['ZANGON MAKUWANA ‐ ZANGON MAKUWANA', 419],
			['DAN‐GAWO', 779],
			['YAR BULUTO', 844]
		];
	}
}