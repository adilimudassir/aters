<?php
namespace App\Services\PollingUnit\Gada;
	
	class Kiri
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'KIRI GARI PRY SCH I',
				// 'KIRI GARI SHIYAR HAKIMI',
				// 'SALAMAWA, SHIYAR HAKIMI I',
				// 'SALAMAWA GIDAN SIDI, SHIYAR MAGAJI II',
				// 'MANAI, SHIYAR HAKIMI',
				// 'KIRIN KWANAWA PRY SCH I',
				// 'KIRIN KWANAWA PRY SCH II',
				// 'TABANNI, PRY SCH',
				// 'DARANBA FULANI',
				// 'DULAI, SHIYAR HAKIMI',
				// 'MATSERIN KATUNE',
				// 'TAJEYE ALAMADO',
				// 'CHAMBUWAL KAIME',
				// 'GIDAN DABO',
				// 'GIDAN ALFARMA',
				// 'TABANNI GIDAN DILLE'

				['KIRI GARI PRY SCH I', 758],
				['KIRI GARI SHIYAR HAKIMI',578],
				['SALAMAWA, SHIYAR HAKIMI I', 923],
				['SALAMAWA GIDAN SIDI, SHIYAR MAGAJI II', 874],
				['MANAI, SHIYAR HAKIMI',688],
				['KIRIN KWANAWA PRY SCH I', 538],
				['KIRIN KWANAWA PRY SCH II', 505],
				['TABANNI, PRY SCH', 591],
				['DARANBA FULANI', 619],
				['DULAI, SHIYAR HAKIMI', 492],
				['MATSERIN KATUNE', 657],
				['TAJEYE ALAMADO', 516],
				['CHAMBUWAL KAIME', 619],
				['GIDAN DABO', 666],
				['GIDAN ALFARMA', 503],
				['TABANNI GIDAN DILLE', 753]
			];
		}
	}