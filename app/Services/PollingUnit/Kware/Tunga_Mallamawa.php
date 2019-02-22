<?php
namespace App\Services\PollingUnit\Kware;
	
	class Tunga_Mallamawa
	{
		
		function __construct()
		{
			
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'TUNGA, PRI. SCH.',
				// 'UNDER TREE TUNGA (TUNGA SHIYAR HAKIMI)',
				// 'TUNGAR DUNA, SHIYAR HAKIMI',
				// 'NUFAWA, PRI. SCH.',
				// 'GEBAWA, SHIYAR HAKIMI',
				// 'MALLAMAWA SARKIN YAKI, PRI. SCH.',
				// 'MALLAMAWA KASUWA, KAURA MALLAMAWA',
				// 'GIDAN GARI, SHIYAR HAKIMI',
				// 'RAFIN DUBAU, SHIYAR HAKIMI',
				// 'GIDAN BASSAKARE, PRI. SCH.',
				// 'TANRAGO, SHIYAR HAKIMI'

				['TUNGA, PRI. SCH.', 386],
				['TUNGA, SHIYAR HAKIMI', 464],
				['TUNGAR DUNA, SHIYAR HAKIMI', 495],
				['NUFAWA, PRI. SCH.', 403],
				['GEBAWA, SHIYAR HAKIMI', 438],
				['MALLAMAWA SARKIN YAKI, PRI. SCH.', 645],
				['MALLAMAWA KASUWA, KAURA MALLAMAWA', 393],
				['GIDAN GARI, SHIYAR HAKIMI', 409],
				['RAFIN DUBAU, SHIYAR HAKIMI', 198],
				['GIDAN BASSAKARE, PRI. SCH.', 406],
				['TANRAGO, SHIYAR HAKIMI', 254]

			];
		}
	}