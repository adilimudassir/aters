<?php
namespace App\Services\PollingUnit\Rabah;
	
	class Gwaddodi_GidanBuWai
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['SHIYAR HAKIMI',682],
				['SHIYAR BAZAI',650],
				['SHIYAR MAGAJI',709],
				['SHIYAR YARI',773],
				['SHIYAR BANGO',790],
				['ANGAMBA',711],
				['DAN DALO',316]
			];
		}
	}