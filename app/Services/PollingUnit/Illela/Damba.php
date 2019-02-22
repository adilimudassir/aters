<?php
namespace App\Services\PollingUnit\Illela;
	
	class Damba
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'PRIMARY SCHOOL GODABE (SHIYAR GALADIMA DAMBA GODABE)',
				// 'SHIYAR MAGAJI DAMBA, MAKARANTA',
				// 'DAMBA KWANAWA, H/BABBA',
				// 'GIDAN KUDUBO, PRI. SCH.',
				// 'LABUDA G/ TARAMNIYA',
				// 'TARKE, MAKARANTA',
				// 'LUGUHURU, HILI',
				// 'PRIMARY SCHOOL SHIYAR MAGAJI DAMBA (BUWADE S. HAKIMI)',
				// 'UNDER A TREE DAMBA KWANAWA (GUDUN GUDUN S. HAKIMI)',
				// 'TSAUNA, MAKARANTA',
				// 'UNDER A TREE SABON GIDA (SABON GIDA S. MAGAJI)',
				// 'UNDER A TREE GIDAN GADA (GIDAN GADA, GIDAN GADA)',
				// 'UNDER A TREE BUWADE (BUWADE DAN FILI)'

				['SHIYAR GALADIMA DAMBA, GODABE', 346],
				['SHIYAR MAGAJI DAMBA, MAKARANTA',778],
				['DAMBA KWANAWA, H/BABBA', 398],
				['GIDAN KUDUBO, PRI. SCH.', 537],
				['LABUDA G/ TARAMNIYA', 242],
				['TARKE, MAKARANTA', 409],
				['LUGUHURU, HILI', 300],
				['BUWADE, S. HAKIMI', 420],
				['GUNDUN GUDUN, S. HAKIMI',466],
				['TSAUNA, MAKARANTA', 209],
				['SABON GIDA, S/MAGAJI', 299],
				['GIDAN GADA, G. GADA', 426],
				['BUWADE, DAN FILI',341]
			];
		}
	}