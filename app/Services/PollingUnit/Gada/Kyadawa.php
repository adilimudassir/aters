<?php
namespace App\Services\PollingUnit\Gada;
	
	class Kyadawa
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'ADULT EDUCATION SCHOOL (SHIYAR GAZAWUR)',
				// 'PRY. SCH. GALADIMA (SHIYAR DAN GALADIMA)',
				// 'KALABA',
				// 'JATTALAWA',
				// 'DANBIREMA',
				// 'GUBETAWA, PRY SCH',
				// 'SAMARIN MARAKE',
				// 'WAURU SHIYAR MAGAJI',
				// 'WAURU SHIYAR MANO',
				// 'WAURU MAKABA',
				// 'HOLAI KANWURI',
				// 'HOLAI TABKI',
				// 'BUJAGA, PRY SCH',
				// 'GIDAN MAIKAMBA, PRY SCH',
				// 'GIDAN AMAMATA, PRY SCH',
				// 'GIDAN BAWA KOFATO, SHIYAR HAKIMI',
				// 'GIDAN DAN KASA',
				// 'ZANGON AJALLO',
				// 'DUNKULAWA, PRY SCH',
				// 'HOLAI BUZAYE, PRY SCH',
				// 'BUNYAGADI, PRY SCH',
				// 'HOLAI SABON GAR',
				// 'GIDAN JATTAL',
				// 'WAURU N.P.S',
				// 'GIDAN KARA'

				['SHIYAR GAZAWUR',1,250],
				['SHIYAR D. GALADIMA', 840],
				['KALABA', 568],
				['JATTALAWA',611],
				['DANBIREMA', 841],
				['GUBETAWA, PRY SCH', 658],
				['SAMARIN MARAKE', 536],
				['WAURU SHIYAR MAGAJI', 830],
				['WAURU SHIYAR MANO', 418],
				['WAURU MAKABA', 837],
				['HOLAI KANWURI',734],
				['HOLAI TABKI', 378],
				['BUJAGA, PRY SCH', 369],
				['GIDAN MAIKAMBA, PRY SCH',327],
				['GIDAN AMAMATA, PRY SCH', 971],
				['GIDAN BAWA KOFATO, SHIYAR HAKIMI', 316],
				['GIDAN DAN KASA', 351],
				['ZANGON AJALLO', 382],
				['DUNKULAWA, PRY SCH', 1048],
				['HOLAI BUZAYE, PRY SCH', 173],
				['BUNYAGADI, PRY SCH', 954],
				['HOLAI SABON GAR', 476],
				['GIDAN JATTAL', 587],
				['WAURU N.P.S', 823],
				['GIDAN KARA', 507]
			];
		}
	}