<?php
namespace App\Services\PollingUnit\SabonBirni;

/**
* this class return the array of polling unit of the class
*/
class S_BirniEast
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			// 'PRI.SCHOOL ‐ TAKATSABA',
			// 'PRI.SCHOOL ‐ KYARA',
			// 'GARIN NAMAIMAI ‐ GARIN NAMAIMAI',
			// 'PRI.SCHOOL ‐ BACHAKA',
			// 'GARIN BUTA ‐ GADIN BUTA',
			// 'PRI.SCHOOL ‐ KALAGE',
			// 'PRI.SCHOOL ‐ GARIN ABARA I',
			// 'GARIN ABARI II CLINIC (PRI.SCHOOL‐GARIN ARABAII)',
			// 'PRI.SCHOOL ‐ MAIWA',
			// 'PRI.SCHOOL ‐ CHINABARKA',
			// 'SON‐ALLAH ‐ SON ALLAH',
			// 'PRI.SCHOOL ‐ DANKWARE',
			// 'PRI.SCHOOL ‐ GARIN UMARA',
			// 'DANGARI ‐ DANGARI',
			// 'SULMAWA ‐ SULMAWA',
			// 'PRIMARY SCHOOL TAKATSABA (TAKASABA MASALLACI)'

				['PRI.SCHOOL - TAKATSABA', 923],
				['PRI.SCHOOL - KYARA', 645],
				['GARIN NAMAIMAI - GARIN NAMAIMAI', 660],
				['PRI.SCHOOL - BACHAKA', 723],
				['GARIN BUTA - GADIN BUTA', 675],
				['PRI.SCHOOL - KALAGE', 751],
				['PRI.SCHOOL - GARIN ABARA I', 886],
				['PRI.SCHOOL - GARIN ABARA II', 760],
				['PRI.SCHOOL - MAIWA', 583],
				['PRI.SCHOOL - CHINABARKA', 597],
				['SON-ALLAH - SON ALLAH', 542],
				['PRI.SCHOOL - DANKWARE',976],
				['PRI.SCHOOL - GARIN UMARA', 1096],
				['DANGARI - DANGARI', 675],
				['SULMAWA - SULMAWA', 653],
				['TAKATSABA MASALLACI - TAKATSABA', 606]

		];
	}
}

