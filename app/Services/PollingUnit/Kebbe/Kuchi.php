<?php
namespace App\Services\PollingUnit\Kebbe;
	
	class Kuchi
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['SHIYAR KOKANI, SHIYAR KOKANI',610],
				['ALELAWA GARKAR ALH. ABU',582],
				['SHIYAR KOKANI MAKARANTA',979],
				['SHIYAR S/RUWA, SHIYAR S/RUWA (YA)',651],
				['SHIYAR S/RUWA, SHIYAR S/RUWA',402],
				['SHIYAR S/RUWA, MASALAU M. JIBO',375],
				['HERE, KUCHI PRY SCH',265],
				['ARAUSAYA, ARAUSAYA SABON GARI',453],
				['TSAMIYAR AYI TSAMIYA KUCHI',489],
				['ADOMA GARKAR ABUNLIBA',759]
			];
		}
	}