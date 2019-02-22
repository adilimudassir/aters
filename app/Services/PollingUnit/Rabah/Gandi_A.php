<?php
namespace App\Services\PollingUnit\Rabah;
	
	class Gandi_A
	{
		
		function __construct()
		{
			
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				["SHIYAR SARADUNA 'A' M P.S",878],
				["SHIYAR SARADUNA 'B'",725],
				['SHIYAR DAN KADU',725],
				['SHIYAR AJIYA, SHIYAR AJIYA',569],
				['SHIYAR GALADIMA',441],
				["BA’AKALE OLD COURT (SHIYAR BAAKALE)",656],
				['SHIYAR DANDUBE',572],
				['SHIYAR DABAWA',428],
				['DANDABBAL',589],
				['MAKERA',619],
				['SHIYAR ZAMAWA',517],
				['TAFAWA AJLIA',333],
				['RUWAN TSAMIYA',247],
				['WARWANNA',291],
				['ILULU',207],
				['GIDAN KARE',313],
				['TAFARA YAN RUWA ‐ P.S',239]
			];
		}
	}