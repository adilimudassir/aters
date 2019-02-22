<?php
namespace App\Services\PollingUnit\Kebbe;
	
	class Nasagudu
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['NASAGUDU, NASAGUDU PRY SCH',690],
				['TUNGAR MAJE, PRY SCH',251],
				['KWANTA GARKAR M. BAYERO',225],
				['BOMNA, BOMNA PRY SCH',321],
				['GARIN MUSA, PRY SCH',190],
				['GARIN KOFA, GARIN KOFA',116],
				['KUNDUTTU, PRY SCH',357],
				['DUTSIN KUKA, PRY SCH',353],
				['TUNGAR LABBO',538],
				['KAWARA, GARKAR MARAFA',452],
				['SH GANDU, DAN HILI)',662],
				['SHIYAN GANDU,KUCHI, KAIWA AYI',717],
				['SH GANDU GARKAR A. BELLO',646]
			];
		}
	}