<?php
namespace App\Services\PollingUnit\Kware;
	
	class Kabanga
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'KABANGA, PRI. SCH.',
				// 'ZANGO JAGABA, SHIYAR HAKIMI',
				// 'GEBEN DAMU, SHIYAR HAKIMI',
				// 'GWARGAL, SHIYAR HAKIMI',
				// 'KAGARA MASU, PRI. SCH.',
				// 'FADA WALKI, SHIYAR HAKIMI',
				// 'KADABA, SHIYAR HAKIMI',
				// 'GURADA BAZO, SHIYAR HAKIMI',
				// 'KARDIDAYE, SHIYAR HAKIMI',
				// 'TSARIKI, SHIYAR HAKIMI',
				// 'KARDIDAYE, SHIYAR HAKIMI'

				['KABANGA, PRI. SCH.', 463],
				['ZANGO JAGABA, SHIYAR HAKIMI', 475],
				['GEBEN DAMU, SHIYAR HAKIMI', 375],
				['GWARGAL, SHIYAR HAKIMI', 292],
				['KAGARA MASU, PRI. SCH.', 401],
				['FADA WALKI, SHIYAR HAKIMI', 367],
				['KADABA, SHIYAR HAKIMI', 296],
				['GURADA BAZO, SHIYAR HAKIMI', 268],
				['KARDIDAYE, SHIYAR HAKIMI', 405],
				['TSARIKI, SHIYAR HAKIMI', 154],
				['KARDIDAYE, SHIYAR HAKIMI', 363]

			];
		}
	}