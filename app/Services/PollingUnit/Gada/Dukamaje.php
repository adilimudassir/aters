<?php
namespace App\Services\PollingUnit\Gada;
	
	class Dukamaje
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'ILAH GARI, ILAH PRY SCH',
				// 'TABANNI, PRY SCH',
				// 'G/FAKO',
				// 'TSUGA BABBA',
				// 'GIDAN BAKO',
				// 'D/MAJE YAMMA',
				// 'GIDAN BUTA',
				// 'DOGON DAJI FARU',
				// 'GIDAN KUKA, PRY SCH',
				// 'GIDAN RAI RAI',
				// 'GIDAN ALBAKARI',
				// 'GIDAN RABAMI',
				// 'RABAMAWA / DANFILI',
				// 'GIDAN JADA, SHIYAR HAKIMI',
				// 'GIDAN BARMU, SHIYAR HAKIMI',
				// 'GIDAN TADIYA, SHIYAR HAKIMI',
				// 'DUKA MAJE GABAS',
				// 'JANGARGARI, SHIYAR MAGAJI',
				// 'BANBARO, SHIYAR MAGAJI',
				// 'DANFILI (TABANNI PRY SCH)'

				['ILAH GARI, ILAH PRY SCH',649],
				['TABANNI, PRY SCH', 574],
				['G/FAKO', 368],
				['TSUGA BABBA',412],
				['GIDAN BAKO', 569],
				['D/MAJE YAMMA', 978],
				['GIDAN BUTA', 604],
				['DOGON DAJI FARU', 865],
				['GIDAN KUKA, PRY SCH', 638],
				['GIDAN RAI RAI', 467],
				['GIDAN ALBAKARI',645],
				['GIDAN RABAMI', 385],
				['RABAMAWA, PRY SCH', 285],
				['GIDAN JADA, SHIYAR HAKIMI',330],
				['GIDAN BARMU, SHIYAR HAKIMI', 429],
				['GIDAN TADIYA, SHIYAR HAKIMI', 348],
				['DUKA MAJE GABAS', 1,040],
				['JANGARGARI, SHIYAR MAGAJI', 450],
				['BANBARO, SHIYAR MAGAJI', 462],
				['TABANNI, PRY SCH', 608]
			];
		}
	}