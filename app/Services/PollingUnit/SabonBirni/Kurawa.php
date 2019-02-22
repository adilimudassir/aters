<?php
namespace App\Services\PollingUnit\SabonBirni;

/**
* this class return the array of polling unit of the class
*/
class Kurawa
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			['SHIYAR MALUNFASHI', 829],
			['SABON GARI‐TASHA', 847],
			['SHIYAR SARKI', 615],
			['SARKIN RAFI', 923],
			['GARKI', 872],
			['DAN ‐ ADUWA', 799 ],
			['MASALLACI ‐ MASAWA', 958],
			['KWATSAL', 1038],
			['MASAWA DABUGI', 608],
			['KWAREN GAMBA', 918],
			['DAKWARO', 435],
			['DOGON MARKE', 381],
			['KUZARI', 440],
			['SHIYAR SARKIN RAFI', 959]
		];
	}
}