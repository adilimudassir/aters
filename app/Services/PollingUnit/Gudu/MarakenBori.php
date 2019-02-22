<?php
namespace App\Services\PollingUnit\Gudu;
	
	class MarakenBori
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['DANFILI, MARAKEN BORI',983],
				['DANFILI, MARAKEN FULANI',613],
				['DANFILI, JIMA JIMIN SULE',696],
				['DANFILI, TAGIMBA',404],
				['DANFILI JIMA JIMIN GAYA',580]
			];
		}
	}