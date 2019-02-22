<?php
namespace App\Services\PollingUnit\Gudu;
	
	class Awulkiti
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['DANFILI AWULKITI MAIGARI',528],
				['KUKOKIN RAFI',476],
				['RAFIN KALGO',519],
				['HUS',403],
				['DANFILI AWULKITI PRY SCH',742]
			];
		}
	}