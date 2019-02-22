<?php
namespace App\Services\PollingUnit\Rabah;
	
	class Tursa
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['SABARRU',809],
				['GIDAN FULANI, GIDAN FULANI',432],
				['TURSA',799],
				['TUMBULLA',443],
				['RAKAKA MAGAJI',421],
				['RAKAKA BUZU',388]
			];
		}
	}