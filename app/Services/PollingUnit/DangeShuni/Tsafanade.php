<?php
namespace App\Services\PollingUnit\DangeShuni;
	
	class Tsafanade
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'GARIYABO/PRIMARY SCHOOL GIDAN GARA (GARAYABO)',
				// 'GALANKAWA/ PRIMARY SCHOOL KATSIRA (GALANKAWA',
				// 'KATSIRA',
				// 'TSAKAR GIDA',
				// 'TSANFANADE',
				// 'GIDAN BARMO',
				// 'ADARAWA',
				// 'BELA, BELA',
				// 'GURGAWA, GURGAWA'
				['GARIYABO', 788],
				['GALANKAWA', 536],
				['KATSIRA', 580],
				['TSAKAR GIDA', 391],
				['TSANFANADE', 602],
				['GIDAN BARMO', 336],
				['ADARAWA', 563],
				['BELA, BELA', 619],
				['GURGAWA, GURGAWA',347]
			];
		}
	}