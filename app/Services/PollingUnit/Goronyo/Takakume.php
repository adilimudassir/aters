<?php
namespace App\Services\PollingUnit\Goronyo;
	
	class Takakume
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'TAKAKUME, DAN FILI',
				// 'TAKAKUME/BUKKA HAMSIN',
				// 'GORAU, BAKIN KASUWA',
				// 'MAI IYALI',
				// 'DISPENSARY (GIDAN ALWALE)',
				// 'DISPENSARY SAKKARAWA (SAKKARAWA)',
				// 'DAN FILI (DAN‐GARKO)'

				['TAKAKUME, DAN FILI', 1,233],
				['TAKAKUME/BUKKA HAMSIN',737],
				['GORAU, BAKIN KASUWA', 1,121],
				['MAI IYALI', 479],
				['GIDAN ALWALE', 732],
				['SAKKARAWA, SAKKARAWA', 432],
				['DANGARKO, DANGARKO', 368]
			];
		}
	}