<?php
namespace App\Services\PollingUnit\Kebbe;
	
	class KebbeEast
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['SHIYAR UBANDAWAKI GARKAR HASHIM)',711],
				['TUDUNWADA, T/WADA PRY SCH',1117],
				['SHIYAR SABON GARI GARKAR ALH. MUSA',1134],
				['DUKURA A, DUKURA D/HILI',596],
				['KUNKURU, D/HILI',327],
				['SHIYAR UBANDAWARI, M.P.SCH',950],
				['DUKURA B, D/HILI',528],
				['MALLAMAWA, GARKAR M. NAINU',707],
				['BALIJAN D/HILI',299]
			];
		}
	}