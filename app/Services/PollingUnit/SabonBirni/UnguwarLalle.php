<?php
namespace App\Services\PollingUnit\SabonBirni;

/**
* this class return the array of polling unit of the class
*/
class UnguwarLalle
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			// 'Y. C KANWURI',
			// 'SHIYAR GAWO',
			// 'RIMAWA',
			// 'MARINA ‐ MARINA',
			// 'MASHAYA ‐ MASHAYA',
			// 'TURTSAWA ‐ TURTSAWA',
			// 'SABON SARA ‐ SABON SARA',
			// 'MAZAU',
			// 'MALLAMAWA ‐ MALLAMAWA',
			// 'MAGARAU ‐ MAGARAU',
			// 'KIRATAWA',
			// 'TAGIRKE',
			// 'SANGERAWA',
			// 'GIDAN GADO',
			// 'GAYYA DA KWARI',
			// 'TAMIN DAWA ‐ TAMIN DAWA',
			// 'BUDDARAWA ‐ BUDDARAWA',
			// 'ALUMUDAWA ‐ ALUMUDAWA'

				['Y. C KANWURI', 834],
				['SHIYAR GAWO', 959],
				['RIMAWA', 874],
				['MARINA - MARINA', 517],
				['MASHAYA - MASHAYA', 373],
				['TURTSAWA - TURTSAWA', 626],
				['SABON SARA - SABON SARA', 470],
				['MAZAU', 372],
				['MALLAMAWA - MALLAMAWA', 548],
				['MAGARAU - MAGARAU', 571],
				['KIRATAWA', 476],
				['TAGIRKE', 499],
				['SANGERAWA', 749],
				['GIDAN GADO', 721],
				['GAYYA DA KWARI', 557],
				['TAMIN DAWA - TAMIN DAWA', 617],
				['BUDDARAWA - BUDDARAWA', 386],
				['ALUMUDAWA - ALUMUDAWA', 588]

		];
	}
}