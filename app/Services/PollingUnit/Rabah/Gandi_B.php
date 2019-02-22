<?php
namespace App\Services\PollingUnit\Rabah;
	
	class Gandi_B
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['DANKARMAWA',465],
				['DANGAZRI ‐ M.P.S',814],
				['CHAKALTU, CHAKALTU',298],
				['ALLIKIRU',473],
				['KURSA ‐ KRUSA',243],
				['BURWANGA ‐ BURWANGA',174],
				['TABANNI ‐ TABANNI',269],
				['DANKARMAWA ‐ M.P.S',457]
			];
		}
	}