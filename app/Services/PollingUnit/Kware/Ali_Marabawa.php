<?php
namespace App\Services\PollingUnit\Kware;
	
	class Ali_Marabawa
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// "HAMMA'ALI, PRI. SCH.",
				// "HAMMA'ALI, KASUWAR HAMMA'ALI",
				// 'GIDAN BUKWAI, SHIYAR SARKIN DAJI',
				// 'GIDAN TUTA, SHIYAR HAKIMI',
				// 'UNDER TREE GIDAN GABAS (GIDAN GABAS SHIYAR HAKIMI)',
				// 'MARANAWA, SHIYAR HAKIMI',
				// 'CINAWA, SHIYAR HAKIMI',
				// 'GALADANCHI SHIYAR HAKIMI',
				// 'SARAKAWA, SHIYAR HAKIMI',
				// 'GIDAN MAISHIRO, HILIN MASALLACI'

				["HAMMA'ALI, PRI. SCH.", 1085],
				["HAMMA'ALI, KASUWAR HAMMA'ALI", 263],
				['GIDAN BUKWAI, SHIYAR SARKIN DAJI', 540],
				['GIDAN TUTA, SHIYAR HAKIMI', 489],
				['GIDAN GABAS, SHIYAR HAKIMI', 331],
				['MARANAWA, SHIYAR HAKIMI', 520],
				['CINAWA, SHIYAR HAKIMI', 739],
				['GALADANCHI SHIYAR HAKIMI', 343],
				['SARAKAWA, SHIYAR HAKIMI', 459],
				['GIDAN MAISHIRO, HILIN MASALLACI', 614]

			];
		}
	}