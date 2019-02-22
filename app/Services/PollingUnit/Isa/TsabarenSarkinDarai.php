<?php
namespace App\Services\PollingUnit\Isa;
	
	class TsabarenSarkinDarai
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'LGEA PRI. SCH. ADARAWA (ADARAWA)',
				// 'GIDAN DIKKO, PRI. SCH.',
				// 'LGEA PRI. SCH TUNTUBE (TUNTUBE)',
				// 'TSABREN SARKIN DARAI, DISPENSARY',
				// 'TSABREN ALTINE, PRI. SCH.',
				// 'GIRNASHE, PRI. SCH.',
				// 'FILIN KASUWA GIRNASHE (GIRNNASHE SABON GARI)',
				// 'GIDAN ABDULKARIM, PRI. SCH.',
				// 'LGEA PRI. SCH. KUKAR NADADA (KUKAR NADADA SHIYAR MAI GARI)',
				// 'RIJIYAR MALAN LADAN, PRI. SCH.',
				// 'TSABREN SARKIN DARAI, DISPENSARY'

				['ADARAWA, ADARAWA', 401],
				['GIDAN DIKKO, PRI. SCH.', 363],
				['TUNTUBE, TUNTUBE', 301],
				['TSABREN SARKIN DARAI, DISPENSARY', 653],
				['TSABREN ALTINE, PRI. SCH.', 638],
				['GIRNASHE, PRI. SCH.', 530],
				['GIRNASHE SABON GARI, SABON GARI', 286],
				['GIDAN ABDULKARIM, PRI. SCH.', 453],
				['KUKAR NADADA, SHIYAR MAIGARI', 420],
				['RIJIYAR MALAN LADAN, PRI. SCH.', 426],
				['TSABREN SARKIN DARAI, DISPENSARY', 429]

			];
		}
	}