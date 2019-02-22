<?php
namespace App\Services\PollingUnit\SabonBirni;

/**
* this class return the array of polling unit of the class
*/
class S_BirniWest
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			// 'VIEWING CENTRE ‐ SHIYAR YAKUBA',
			// 'KOFAR NA SORO ‐ SHIYAR MAGAJI',
			// 'YAN‐AWAKI PRI.SCHOOL‐ SHIYAR DAN‐BAKI I',
			// 'YAN‐AWAKI PRI.SCHOOL‐ SHIYAR DAN‐BAKI II',
			// 'MATERNITY ‐ SHIYAR DAN‐ILAH I',
			// 'MATERNITY ‐ SHIYAR DAN‐ILAH II',
			// 'TSAMIYAR AGUJE ‐ SHIYAR DAN GALADIMA I',
			// 'TSAMIYAR AGUJE ‐ SHIYAR DAN GALADIMA II',
			// 'HANDE PRI.SCHOOL ‐ SHIYAR UBANDAWAKI',
			// 'GIDAN DAWAI ‐ GIDAN DAWAI',
			// 'MAGAJIN DAWAKI‐MAGAJIN DAWAKI',
			// 'TOWN MODEL PRI.SCHOOL ‐ SHIYAR YAKUBU',
			// 'GOVERNMENT LODGE ‐ SHIYAR MALLAN KADA',
			// 'TSAMIYA KASUWA ‐ SHIYAR MAGAJI I',
			// 'TSAMIYA KASUWA ‐ SHIYAR MAGAJI II',
			// 'WOMEN CENTRE ‐ SHIYAR DANGALADIMA',
			// 'G.S.S S/BIRNI TEMGRAND'

				['VIEWING CENTRE - SHIYAR YAKUBA', 1,282],
				['KOFAR NA SORO - SHIYAR MAGAJI', 1,062],
				['YAN-AWAKI PRI.SCHOOL- SHIYAR DAN-BAKI I', 1,101],
				['YAN-AWAKI PRI.SCHOOL- SHIYAR DAN-BAKI II', 1,378],
				['MATERNITY - SHIYAR DAN-ILAH I', 724],
				['MATERNITY - SHIYAR DAN-ILAH II', 838],
				['TSAMIYAR AGUJE - SHIYAR DAN GALADIMA I', 1019],
				['TSAMIYAR AGUJE - SHIYAR DAN GALADIMA II', 1019],
				['HANDE PRI.SCHOOL - SHIYAR UBANDAWAKI', 1,500],
				['GIDAN DAWAI - GIDAN DAWAI', 663],
				['MAGAJIN DAWAKI-MAGAJIN DAWAKI', 911],
				['TOWN MODEL PRI.SCHOOL - SHIYAR YAKUBU',1,150],
				['GOVERNMENT LODGE - SHIYAR MALLAN KADA', 888],
				['TSAMIYA KASUWA - SHIYAR MAGAJI I', 906],
				['TSAMIYA KASUWA - SHIYAR MAGAJI II', 885],
				['WOMEN CENTRE - SHIYAR DANGALADIMA', 1,428],
				['G.S.S S/BIRNI TEMGRAND', 1,440]

		];
	}
}