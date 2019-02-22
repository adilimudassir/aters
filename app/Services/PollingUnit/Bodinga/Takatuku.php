<?php
namespace App\Services\PollingUnit\Bodinga;
	
	class Takatuku
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'PRY. SCH. LULU RAF (S/HAKIMI,LULU RAFI I)',
				// 'SHIYAR HAKIMI, LULU RAFI II',
				// 'MODEL PRY SCH, TARATUKU',
				// 'SHIYAR HAKIMI, SHABON',
				// 'PRY. SCH. S/DIKKO (SHIYAR MAGAJI S/DIKKO)',
				// 'SHIYAR HAKIMI, K/GORUWA',
				// 'MODEL PRY SCH, D/MARERA',
				// 'PRY. SCH. GOBIRAWA (SHIYAR HAKIMI GOBIRAWA)',
				// 'PRY. SCH. RUGA BUSAU (SHIYAR HAKIMI RUGA BUSAU)',
				// 'SHIYAR HAKIMI, KULALO',
				// 'TASHA MILGOMA'

				['SHIYAR HAKIMI, LULU RAFI I', 216],
				['SHIYAR HAKIMI, LULU RAFI II', 344],
				['MODEL PRY SCH, TARATUKU', 933],
				['SHIYAR HAKIMI, SHABON', 317],
				['SHIYAR MAGAJI, SHIYAR DIKKO', 505],
				['SHIYAR HAKIMI, K/GORUWA', 450],
				['MODEL PRY SCH, D/MARERA', 374],
				['SHIYAR HAKIMI, GOBIRAWA', 335],
				['SHIYAR HAKIMI RUGA BUSAU', 378],
				['SHIYAR HAKIMI, KULALO', 265],
				['TASHA MILGOMA', 836]
			];
		}
	}