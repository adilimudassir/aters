<?php
namespace App\Services\PollingUnit\Bodinga;
	
	class Badagarawa
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'MODEL PRY SCH, SHIYAR MANU',
				// 'SHIYAR HAKIMI, GUGARI',
				// 'PRY SCH, R/YARDE',
				// 'SHIYAR HARIMI, R/GARBA',
				// 'SHIYAR HARIMI, MALLAWA',
				// 'PRY SCH, BENGEL',
				// 'SHIYAR HAKIMI, SAULANA',
				// 'DISPENSARY, BAGARAWA'
				
				['MODEL PRY SCH, SHIYAR MANU', 283],
				['SHIYAR HAKIMI, GUGARI', 419],
				['PRY SCH, R/YARDE', 784],
				['SHIYAR HARIMI, R/GARBA', 270],
				['SHIYAR HARIMI, MALLAWA', 329],
				['PRY SCH, BENGEL', 399],
				['SHIYAR HAKIMI, SAULANA', 329],
				['DISPENSARY, BAGARAWA', 663]
			
			];
		}
	}