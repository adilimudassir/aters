<?php
namespace App\Services\PollingUnit\Isa;
	
	class Tidibale
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// "LGEA PRI. SCH. KALKA'IRU (KALKA'IRU)",
				// 'LGEA PRI. SCH. CHOHIMAYAL (CHOHIMAYAL)',
				// 'LGEA PRI. SCH. GIDAN SALE (GIDAN SALE)',
				// 'LGEA PRI. SCH. SALAMAWA (SALAMAWA)',
				// 'LGEA PRI SCH. TIDIBALE (TIDIBALE SHIYAR SARKIN NOMA)',
				// 'LGEA PRI SCH. SHIYAR ARAWA (SHIYAR ARAWA)',
				// 'LGEA PRI. SCH. GAMAROJI (GAMAROJI)',
				// 'LGEA PRI. SCH. JIMBAMA (JIMBAMA)',
				// 'LGEA PRI. SCH. GIDAN MAIKWANO (GIDAN MAI KWANO)',
				// 'LGEA PRI. SCH. DANGULBI (DANGULBI)',
				// 'TIDIBALE DISPENSARY (TIDIBALE SHIYAR SARKIN NOMA)',
				// 'LGEA PRI. SCH. SHIYAR ARAWA (SHIYAR AREWA)'
				
				["KALKA'IRU, KALKA'IRU", 342],
				['CHOHIMAYAL', 530],
				['GIDAN SALE, GIDAN SALE', 519],
				['SALAMAWA, SALAMAWA', 259],
				['TIDIBALE, SHIYAR SARKIN NOMA', 549],
				['SHIYAR ARAWA, SHIYAR ARAWA', 333],
				['GAMAROJI, GAMAROJI', 330],
				['JIMBAMA, JIMBAMA', 310],
				['GIDAN MAIKWANO, GIDAN MAIKWANO', 170],
				['DAN GULBI, DAN GULBI', 376],
				['TIDIBALE, SHIYAR SARKIN NOMA', 183],
				['SHIYAR ARAWA, SHIYAR ARAWA', 400]
			];
		}
	}