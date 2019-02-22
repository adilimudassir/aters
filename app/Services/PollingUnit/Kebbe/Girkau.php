<?php
namespace App\Services\PollingUnit\Kebbe;
	
	class Girkau
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['GARKAU S. GALADIMA',1045],
				['MAZOJI, MAZOJI PRY SCH',343],
				['GIRKAU SHIYAR TUDU',1212],
				['ZUGUN KEBBE S/HAKIMI',553],
				['GIRKAU SHIYAR GALADIMA',1122],
				['GIDAN GARSO, TASHAR KALGO',213],
				['SABON GARI ZUGOU PRY SCH',354],
				['ZUGUN KEBBE, ZUGUN KEBBE PRY SCH',671],
				['JABGA, JABGA PRY SCH',763],
				['INDIRE, SHIYAR HAKIMI',315],
				['TUGAR KABAWA, DAN GARKAR BOKA',481]
			];
		}
	}