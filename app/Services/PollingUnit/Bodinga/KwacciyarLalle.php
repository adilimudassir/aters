<?php
namespace App\Services\PollingUnit\Bodinga;
	
	class KwacciyarLalle
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'MODEL PRY SCH, KWACCIYAR LALLE',
				// 'SHIYAR HAKIMI, KUNKUMI',
				// 'SHIYAR HAKIMI, SABARA',
				// 'PRY SCH, D/DUGUZA',
				// 'SHIYAR HAKIMI, KAURA KASA',
				// 'PRY SCH, BUNAZAWA',
				// 'PRY SCH, ZANAGALAWA',
				// 'SHIYAR HAKIMI, RUNJI KWARA',
				// 'BAKIN MASALLACI, BAGALAWA',
				// 'SHIYAR HAKIMI, TSOMAU'

				['MODEL PRY SCH, KWACCIYAR LALLE', 637],
				['SHIYAR HAKIMI, KUNKUMI', 550],
				['SHIYAR HAKIMI, SABARA', 432],
				['PRY SCH, D/DUGUZA', 410],
				['SHIYAR HAKIMI, KAURA KASA', 314],
				['PRY SCH, BUNAZAWA', 412],
				['PRY SCH, ZANAGALAWA', 525],
				['SHIYAR HAKIMI, RUNJI KWARAI', 299],
				['BAKIN MASALLACI, BAGALAWA', 443],
				['SHIYAR HAKIMI, TSOMAU', 227]
			];
		}
	}