<?php
namespace App\Services\PollingUnit\Kebbe;
	
	class Margai_A
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['DUMKA, D/HILI',565],
				['JIGIRI',499],
				['GADDACCE, GADACCE PRY SCH',916],
				['TUNGAR MINDAUDU D/HILL',398],
				['MARGAI SH. SHANTALI, ASIBITI',1343],
				['MARGAI SH. GALADIMA, SH. GALADIMA',625],
				['YARRUDDA, D/HILI',293]
			];
		}
	}