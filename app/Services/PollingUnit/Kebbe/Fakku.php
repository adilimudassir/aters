<?php
namespace App\Services\PollingUnit\Kebbe;
	
	class Fakku
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['FAKKU SH.S/ FAKKU',858],
				['RAFIN KADE/ DUTSIN LERE PRY SCH',222],
				['SHAAL WASHI PRIMARY SCHOOL',514],
				['BASHI PRIMARY SCHOOL',492],
				['RARAH MAGAJI',732],
				['RARAH PRIMARY SCHOOL',490],
				['RAFINGORA PRIMARY SCHOOL',319],
				['SADU, SADU PRIMARY SCHOOL',412],
				['SHIYAR S RUWA, S.S RUWA FAKKU',1053],
				['BINDANU BINDANU D/HILI',523],
				['BAKINDUTSI, BAKINDUTSI',328],
				['URU, URU DANHILI',189]
			];
		}
	}