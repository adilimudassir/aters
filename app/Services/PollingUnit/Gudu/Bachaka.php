<?php
namespace App\Services\PollingUnit\Gudu;
	
	class Bachaka
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['BACHAKA GABAS',941],
				['BACKAKA YAMMA',1024],
				['TULUN BIRI',439],
				['ZABARMAWA',433],
				['SALAWA',619],
				['BAKI / GUMBIN DURI',427],
				['SHATOKA',476],
				['DANFILI, GIDAN DANTANIN',422],
				['PRY SCH, ARBAKWAI',322],
				['BACHAKA DANFILI',847]
			];
		}
	}