<?php
namespace App\Services\PollingUnit\Kware;
	
	class Tsaki_Walake_E
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'ZAMAU PRI. SCH., PRI. SCH.',
				// 'ZAMAU MASALLACI, SHIYAR MASALLACI',
				// 'TSAKI/ADARAWA',
				// 'GANTAMAU',
				// 'BANGU, SHIYAR HAKIMI',
				// 'CHIDA, SHIYAR HAKIMI',
				// "WALAKA'E, SHIYAR HAKIMI",
				// 'DANGAWO, SHIYAR HAKIMI',
				// "BAGGA 'A', SHIYAR HAKIMI",
				// 'DANKOMANI, PRI. SCH.',
				// 'MARUDA, PRI. SCH.',
				// 'MAMDA, BARNAWA PRY. SCH.'

				['ZAMAU PRI. SCH., PRI. SCH.', 776],
				['ZAMAU MASALLACI, SHIYAR MASALLACI', 536],
				['TSAKI/ADARAWA', 544],
				['GANTAMAU', 713],
				['BANGU, SHIYAR HAKIMI', 406],
				['CHIDA, SHIYAR HAKIMI', 409],
				["WALAKA'E, SHIYAR HAKIMI", 465],
				['DANGAWO, SHIYAR HAKIMI', 656],
				["BAGGA 'A', SHIYAR HAKIMI", 621],
				['DANKOMANI, PRI. SCH.', 350],
				['MARUDA, PRI. SCH.', 685],
				['MAMDA, BARNAWA PRY. SCH.',200]

			];
		}
	}