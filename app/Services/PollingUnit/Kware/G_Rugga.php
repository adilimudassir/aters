<?php
namespace App\Services\PollingUnit\Kware;
	
	class G_Rugga
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'PRI. SCHOOL GIDAN RUGGA (GIDAN RUGGA SHIYAR HAKIMI)',
				// 'RUGGAR LIMAN, SHIYAR HAKIMI I',
				// 'RUGGAR LIMAN, SHIYAR HAKIMI II',
				// 'RUNJIN TSAMIYA, SHIYAR HAKIMI',
				// 'GANDU, PRI. SCH.',
				// 'MORE, PRI. SCH. I',
				// 'MORE, PRI. SCH. II'

				["GIDAN RUGGA, SHIYAR HAKIMI", 934],
				["RUGGAR LIMAN, SHIYAR HAKIMI I", 669],
				['RUGGAR LIMAN, SHIYAR HAKIMI II', 481],
				['RUNJIN TSAMIYA, SHIYAR HAKIMI', 583],
				['GANDU, PRI. SCH.', 846],
				['MORE, PRI. SCH. I', 1,281],
				['MORE, PRI. SCH. II', 1,159]
			];
		}
	}