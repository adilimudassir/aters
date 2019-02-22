<?php
namespace App\Services\PollingUnit\SabonBirni;

/**
* this class return the array of polling unit of the class
*/
class Tara
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			// 'GARIN HILLO ‐ GARIN HILLO',
			// 'DISPENSARY ‐ SHIYAR KOFA',
			// 'SHIYAR BARA I',
			// 'PRI‐SCH (SHIYAR BORAI II)',
			// 'GARIN ZAGO',
			// 'NASARAWA',
			// 'RAMBADAWA',
			// 'TSAUNA GARIN ANGO',
			// 'GIDAN HASSAN ‐ GIDAN ‐ HASSAN',
			// 'GARIN IDI KWARE ‐ GARIN IDI KWARE',
			// 'GARIN IDI TUDU',
			// 'PRI. SCH. SHIYAR KOFA (SHIYAR KOFA)',
			// 'SHIYAR HABIBU',
			// 'PRI.SCHOOL ‐ GARIN ZANGO',
			// 'PRI. SCH. RAMBADAWA (RAMBADAWA PRI.SCH. ‐ RAMBADAWA)'

				['GARIN HILLO - GARIN HILLO', 749],
				['DISPENSARY - SHIYAR KOFA', 637],
				['SHIYAR BARA I', 630],
				['SHIYAR BARA II', 778],
				['GARIN ZAGO', 809],
				['NASARAWA', 535],
				['RAMBADAWA', 712],
				['TSAUNA GARIN ANGO', 557],
				['GIDAN HASSAN - GIDAN - HASSAN', 409],
				['GARIN IDI KWARE - GARIN IDI KWARE', 756],
				['GARIN IDI TUDU', 741],
				['MASALLACI - SHIYAR KOFA', 360],
				['SHIYAR HABIBU', 653],
				['PRI.SCHOOL - GARIN ZANGO', 336],
				['RAMBADAWA PRI.SCH. - RAMBADAWA', 413]

		];
	}
}