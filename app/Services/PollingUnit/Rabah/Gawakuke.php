<?php
namespace App\Services\PollingUnit\Rabah;
	
	class Gawakuke
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['MADAWA, MADAWA',483],
				['SARDAUNA M.P.S',620],
				['SHIYAR KINARI S/KINARI',588],
				['GAWAKUKE',559],
				['RABAH MABA',391],
				['GIDAN DOKA ‐ GIDAN DOKA',458],
				['GIDAN AIMAJIRI, GIDAN ALMAJIRI',253],
				['GIDAN MAGAJIYA',309],
				['GIDAN BARABO ‐ GIDAN BARABO',273],
				['SHIYAR SARKIN YAKI, S/YAKI ',396],
				['BURMAWA BARABO ‐ DAN FILI',384]
			];
		}
	}