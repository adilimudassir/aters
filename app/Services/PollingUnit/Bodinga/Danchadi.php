<?php
namespace App\Services\PollingUnit\Bodinga;
	
	class Danchadi
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'READING ROOM, KANWURI',
				// 'YANDURUMI, SHIYAR ALU HARKA',
				// 'SHIYAR HAYI, SHIYAR HAYI',
				// 'SHIYAR DIKKO, SHIYAR DIKKO',
				// 'SHIYAR DANAMO',
				// 'KARAJE, KARAJE',
				// 'CHILAWA, SHIYAR TITTI',
				// 'SH. S/FAWA',
				// 'MRS RUMBUKU',
				// "NORMADIC SCH. KARAZUNTU (KARAZUNTU, KARAZUNTU)",
				// "SHIYAR MARAFA, SHIYAR MARAFA",
				// 'PRY SCH, GIDAN GWANFU',
				// 'SHIYAR HAKIMI, GIDAN DANBUBE',
				// 'YANGIDAJE, YANGI DAJE',
				// 'DUTSIN MAZARA, PRY SCH',
				// 'PRY SCH, RUMBUKI'

				['READING ROOM, KANWURI', 740],
				['YANDURUMI, SHIYAR ALU HARKA', 460],
				['SHIYAR HAYI, SHIYAR HAYI', 608],
				['SHIYAR DIKKO, SHIYAR DIKKO', 484],
				['SHIYAR DANAMO', 806],
				['KARAJE, KARAJE', 223],
				['CHILAWA, SHIYAR TITTI', 772],
				['SH. S/FAWA', 916],
				['MRS RUMBUKU', 101],
				['KARAZUNTU, KARAZUNTU', 375],
				['SHIYAR MARAFA, SHIYAR MARAFA', 377],
				['PRY SCH, GIDAN GWANFU', 425],
				['SHIYAR HAKIMI, GIDAN DANBUBE', 224],
				['YANGIDAJE, YANGI DAJE', 304],
				['DUTSIN MAZARA, PRY SCH', 278],
				['PRY SCH, RUMBUKI', 219]
			];
		}
	}


