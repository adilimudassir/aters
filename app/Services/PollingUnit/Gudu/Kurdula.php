<?php
namespace App\Services\PollingUnit\Gudu;
	
	class Kurdula
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['PRY SCH, KURDULA',936],
				['SHIYAR DAMBO',862],
				['ADARAWA, ZABARMAWA',800],
				['KURUNKUSITI/BUNYA',517],
				['DARUSA GAWO',995],
				['DARUSA MUSA',634],
				['DARUSA SAMNA',569],
				['KATSURA, KATSURA',1361],
				['DABAGA, DABAGA',126],
				['ADARAWA ZABARMAWA DANFILI',662]
			];
		}
	}