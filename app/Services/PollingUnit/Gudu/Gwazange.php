<?php
namespace App\Services\PollingUnit\Gudu;
	
	class Gwazange
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['PRY SCH, GWAZANGE',380],
				['DANFILI, BOTO',1121],
				['DANFILI, YAKA GABAS',652],
				['DANFILI, YAKA YAMMA',660],
				['DANFILI GWAZANGE',561]
			];
		}
	}