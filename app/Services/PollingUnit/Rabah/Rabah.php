<?php
namespace App\Services\PollingUnit\Rabah;
	
	class Rabah
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['SHIYAR MAJIKIRA ‐ A. RABAH',916],
				['SHIYAR MAJIKIRA ‐ B. RABAH',927],
				['SHIYAR GALADIMA RABAH',1084],
				['SHIYAR RAFI ‐ RABAH',1139],
				["SHIYAR MAGAJI 'A'RABAH",895],
				['SHIYAR MAGAJI B RABAH',828],
				['KOGOGO HAKIMI',510],
				['JICCINI',433],
				['G.G.C RABAH',526],
				['KOKOGO DUTSE',559],
				['SABON GARI RABAH',1264]
			];
		}
	}