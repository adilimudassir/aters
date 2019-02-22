<?php
namespace App\Services\PollingUnit\Gudu;
	
	class KarfenChana
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['DANFILI, KARFEN CHINA',1175],
				['MALLAMAWA, KARFEN CHINA',886],
				['BUNGUEL DANFILI',565],
				['TUNGAR NAMAIWA',388]
			];
		}
	}