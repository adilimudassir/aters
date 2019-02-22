<?php
namespace App\Services\PollingUnit\Gudu;
	
	class Chilas
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['CHILAS YAMMA',580],
				['CHILAS GABAS',586],
				['MAKUYA YAMMA',639],
				['MAKUYA GABAS',448],
				['DANFILI, KASAURA',310],
				['DANGADABRO',634],
				['TULLUWA',607],
				['KWALCHI',473],
				['DANFILI, KASAURA',541]
			];
		}
	}