<?php
namespace App\Services\PollingUnit\Illela;
	
	class RGati
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'RUNGUMAWAR GATTI, MAKARANTA',
				// 'UNDER A TREE GIDAN HAMMA (GIDAN HAMMA)',
				// 'UNDER A TREE GIDAN KIRYA (GIDAN KIRYA)',
				// 'RUNGUMAWAR JAO, DANHILI',
				// 'LAKODA, KWAKWARA',
				// 'ZANGON LAKODA, KALGO',
				// 'LAFANI, MAKARANTA',
				// 'GIDAN CIWAKE MAKARATA',
				// 'TUDUN AYA , KWAKWARA',
				// 'IDIKI, MAKARANTA',
				// 'UNDER A TREE GIDAN DODO) (GIDAN DODO)',
				// 'RUNGUMAWAR GATTI, SHIYAR GALADIMA',
				// 'SABON GARIN HAMMA , HILI BABBA',
				// 'LAFANI AZAMAWA, GARKAR HAKIMI',
				// 'PRIMARY SCHOOL LAKODA (LAKODA LAKODA)'

				['RUNGUMAWAR GATTI, MAKARANTA', 501],
				['GIDAN HAMMA, G. MAGAJI',307],
				['GIDAN KIRYA, GARKAR NOMA', 394],
				['RUNGUMAWAR JAO, DANHILI', 516],
				['LAKODA, KWAKWARA', 518],
				['ZANGON LAKODA, KALGO', 308],
				['LAFANI, MAKARANTA', 514],
				['GIDAN CIWAKE MAKARATA', 871],
				['TUDUN AYA , KWAKWARA',437],
				['IDIKI, MAKARANTA', 598],
				['GIDAN DODO, GIDAN DODO',448],
				['RUNGUMAWAR GATTI, SHIYAR GALADIMA',538],
				['SABON GARIN HAMMA , HILI BABBA', 479],
				['LAFANI AZAMAWA, GARKAR HAKIMI', 661],
				['LAKODA, LAKODA', 549]

			];
		}
	}