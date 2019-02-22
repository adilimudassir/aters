<?php
namespace App\Services\PollingUnit\Gada;
	
	class KadadinBuda
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'KADADIN BUDA, DISPENSARY',
				// 'KADADIN BUDA, PRY SCH K/B',
				// 'GIDAN GAINA, PRY SCH G.GAINA',
				// 'RAFINDUMA, PRY SCH RD',
				// 'RAFINDUMA, SHIYAR MAGAJI',
				// 'GIDAN SALAU, PRY SCH SALAU',
				// 'INGABORO, PRY SCH',
				// 'SABON GARI GIDAN ARZIKA, PRY SCH',
				// 'KADADIN MAIDABO, PRY SCH',
				// 'KAGA DANFILI',
				// 'TANTARKWAI, PRY SCH',
				// 'SAGERAR DIKKO, DAN FILI',
				// 'SAGERAR ANGO, DAN FILI',
				// 'TUFFAL ALIYU, DAN FILI',
				// 'GIDAN KWANI, TASHA',
				// 'INGABORO, PRY SCH',
				// 'IDDARAWA, DAN FILI',
				// 'TUFFAL BABA, DAN FILI',
				// 'GIDANZAFI, DAN FILI',
				// 'RAFINDUMA, PRY SCH',
				// 'SAGERAR DIKKO, DAN FILI'

				['KADADIN BUDA, DISPENSARY',984],
				['KADADIN BUDA, PRY SCH K/B', 745],
				['GIDAN GAINA, PRY SCH G.GAINA', 308],
				['RAFINDUMA, PRY SCH RD',743],
				['RAFINDUMA, SHIYAR MAGAJI', 513],
				['GIDAN SALAU, PRY SCH SALAU', 391],
				['INGABORO, PRY SCH', 373],
				['SABON GARI GIDAN ARZIKA, PRY SCH', 386],
				['KADADIN MAIDABO, PRY SCH', 1,014],
				['KAGA DANFILI', 399],
				['TANTARKWAI, PRY SCH', 388],
				['SAGERAR DIKKO, DAN FILI', 870],
				['SAGERAR ANGO, DAN FILI', 787],
				['TUFFAL ALIYU, DAN FILI', 476],
				['GIDAN KWANI, TASHA', 560],
				['INGABORO, PRY SCH', 764],
				['IDDARAWA, DAN FILI', 569],
				['TUFFAL BABA, DAN FILI', 421],
				['GIDANZAFI, DAN FILI', 256],
				['RAFINDUMA, PRY SCH', 411],
				['SAGERAR DIKKO, DAN FILI', 420]
			];
		}
	}