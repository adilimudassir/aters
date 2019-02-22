<?php
namespace App\Services\PollingUnit\Kware;
	
	class G_Modibbo
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'GIDAN AKWARA, PRI. SCH.',
				// 'GIDAN MAIKARA, SHIYAR HAKIMI',
				// 'MALLAMAWA, SHIYAR HAKIMI',
				// 'HAUSA SH. HAKIMI',
				// 'SABON GARI',
				// 'RUGGAR GIWA, PRI. SCH. I',
				// 'RUGGAR GIWA, PRI. SCH. II',
				// 'SIREJALO, SHIYAR HAKIMI',
				// 'GIDAN MODIBBO, PRI. SCH.',
				// 'GIDAN MUSA, SHIYAR HAKIMI',
				// 'KARADAI, SHIYAR HAKIMI',
				// 'GIDAN DAN RABI, SHIYAR HAKIMI',
				// 'GIDAN RAIRAI, SHIYAR HAKIMI',
				// 'GIDAN SIRGI, SHIYAR HAKIMI',
				// 'UMMA RUMA, PRI. SCH. I',
				// 'UMMA RUMA, PRI. SCH. II'

				["GIDAN AKWARA, PRI. SCH.", 516],
				["GIDAN MAIKARA, SHIYAR HAKIMI", 274],
				['MALLAMAWA, SHIYAR HAKIMI', 645],
				['HAUSA SH. HAKIMI', 788],
				['SABON GARI', 456],
				['RUGGAR GIWA, PRI. SCH. I', 373],
				['RUGGAR GIWA, PRI. SCH. II', 401],
				['SIREJALO, SHIYAR HAKIMI', 715],
				['GIDAN MODIBBO, PRI. SCH.', 456],
				['GIDAN MUSA, SHIYAR HAKIMI', 272],
				['KARADAI, SHIYAR HAKIMI', 437],
				['GIDAN DAN RABI, SHIYAR HAKIMI', 228],
				['GIDAN RAIRAI, SHIYAR HAKIMI', 211],
				['GIDAN SIRGI, SHIYAR HAKIMI', 229],
				['UMMA RUMA, PRI. SCH. I', 595],
				['UMMA RUMA, PRI. SCH. II', 477]
			];
		}
	}