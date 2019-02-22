<?php
namespace App\Services\PollingUnit\Rabah;
	
	class Rara
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['SHIYAR YAMMA ‐ MODEL PRI.SCHOOL',1435],
				['SHIYAR YAMMA ‐ SH/GALADIMA',703],
				['SHIYAR MARAFA‐ADULT EDU',961],
				['SHIYAR MALLAMAWA ‐ SH/M',749],
				['MADAWA ‐ P/SCH',473],
				['CHIRIB DIKKO ‐ MODEL PRI.SCHOOL',512],
				['TUKKUYUM ‐ M.P.S',346],
				['DAWAKAWA ‐ MODEL PRI.SCHOOL',407],
				['YOLA BOGAYE ‐ YOLA',273],
				['DUDU/BARADE ‐ M.P.S',573],
				['SABON GARI',475]
			];
		}
	}