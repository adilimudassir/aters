<?php
namespace App\Services\PollingUnit\Gada;
	
	class Kwarma
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'KWARMAR DIKKO, PRY SCH',
				// 'KWARMAR PRY. SCH',
				// 'KWARAMA',
				// 'KUMAJI',
				// 'SABON GIDA',
				// 'KIRI KAFADA'

				['KWARMAR DIKKO, PRY SCH', 690],
				['KWARMAR PRY. SCH',713],
				['KWARAMA', 802],
				['KUMAJI', 436],
				['SABON GIDA', 892],
				['KIRI KAFADA', 683]
			];
		}
	}