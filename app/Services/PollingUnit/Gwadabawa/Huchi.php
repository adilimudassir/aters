<?php
namespace App\Services\PollingUnit\Gwadabawa;
	
	class Huchi
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['SHIYAR HAKIMI, MARANAWA',534],
				['SHIYAR HAKIMI, SABON GARI',174],
				['FILIN INJIN, KABAWA',319],
				['PRY SCH, KAURA HUCHI',340],
				['SHIYAR HAKIMI, JUJIN MAGAJI',294],
				['KASUWA, YAURAWA',257],
				['PRY SCH, SHIYAR GALADIMA',559]
			];
		}
	}