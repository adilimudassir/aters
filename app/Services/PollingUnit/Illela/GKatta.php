<?php
namespace App\Services\PollingUnit\Illela;
	
	class GKatta
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'BASANTA, BASANTA',
				// 'GAIDAU, MAKARANTA',
				// 'KWANDAMO, KWANDAMO',
				// 'MALALI, MAKARANTA',
				// 'GIDAN KATTA, S. HAKIMI',
				// 'GIDAN SANDAGA, G. SANDAGA',
				// 'MASASA, MASASA HILI',
				// 'MASHEKARIN BASANTA, MASHEKARI',
				// 'GAIDAN MAKARANTA, MAKARANTA',
				// 'BASANTA MAKARANTA, MAKARANTA'

				['BASANTA, BASANTA', 440],
				['GAIDAU, MAKARANTA', 854],
				['KWANDAMO, KWANDAMO', 604],
				['MALALI, MAKARANTA', 280],
				['GIDAN KATTA, S. HAKIMI', 569],
				['GIDAN SANDAGA, G. SANDAGA', 645],
				['MASASA, MASASA HILI', 711],
				['MASHEKARIN BASANTA, MASHEKARI', 217],
				['GAIDAN MAKARANTA, MAKARANTA',510],
				['BASANTA MAKARANTA, MAKARANTA',450]

			];
		}
	}