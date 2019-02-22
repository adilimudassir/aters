<?php
namespace App\Services\PollingUnit\Kebbe;
	
	class Sangi
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['NABASA, NABASA PRY SCH',368],
				['SANGI, SANGI PRY SCH',465],
				['JIGAWA, JIGAWA PRY SCH',493],
				['SABON BIRNI, S.BIRNI PRY SCH',529],
				['YAR ROMO GARKAR HAKIMI',177],
				['SABON BIRNI 2, SHIYAR MAGAJI',559],
				['SABLA, SABALA PRY SCH',463],
				['TUNE, M.P.S',204],
				['LUMU GARKAR HAKIMI',349],
				['SANGI SH KOFAR',546]
			];
		}
	}