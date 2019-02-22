<?php
namespace App\Services\PollingUnit\Gudu;
	
	class Balle
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['BALLE GABAS',1179],
				['BALE YAMMA',1311],
				['RAFIN KUBU',699],
				['MARAFA, BANGI',1023],
				['KOKOTAU',486],
				['TUNGAR BALLE',780],
				['KUTUFARE',540],
				['DAYEJI',525],
				['BALLI DANFILI',1296],
				['RAFIN KUBU B',502]
			];
		}
	}