<?php
namespace App\Services\PollingUnit\Gudu;
	
	class TulunDoya
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['DANFILI, TULUN DOYA  A',659],
				['DANFILI, TUDUN DOYA  B',652],
				['KISO, KISO',748],
				['YAMO, YAMO',600],
				['KWARARAF, KWARARAF',483]
			];
		}
	}