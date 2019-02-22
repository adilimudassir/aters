<?php
namespace App\Services\PollingUnit\Kware;
	
	class Bankanu
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'BANKANU, SHIYAR HAKIMI',
				// 'BANKANU MARABA, PRI. SCH',
				// 'UNDER TREE KASGADA (KASGADA S/HAKIMI)',
				// 'UNDER TREE KWARZARI (KWARZARI S/HAKIMI)',
				// 'FANDU, SHIYAR HAKIMI',
				// 'ALMUMIN, SHIYAR HAKIMI',
				// 'TUNGAR BAHAGO, SHIYAR HAKIMI',
				// 'MAKERA, SHIYAR HAKIMI',
				// 'RIJIYAR KADE, SHIYAR HAKIMI',
				// 'AGALAWA, SHIYAR HAKIMI',
				// 'SABON GARI, SHIYAR HAKIMI',
				// 'RUNJI, PRI. SCH.',
				// 'KALALAWA, PRI. SCH I',
				// 'KALALAWA, PRI. SCH II',
				// 'TUTUBA, SHIYAR HAKIMI',
				// 'KWALLATAWA, SHIYAR HAKIMI',
				// 'MASHIDI, SHIYAR HAKIMI'

				['BANKANU, SHIYAR HAKIMI', 823],
				['BANKANU MARABA, PRI. SCH.', 998],
				['KASGADA, SHIYAR HAKIMI', 565],
				['KWAZARI, SHIYAR HAKIMI', 893],
				['FANDU, SHIYAR HAKIMI', 498],
				['ALMUMIN, SHIYAR HAKIMI', 459],
				['TUNGAR BAHAGO, SHIYAR HAKIMI', 594],
				['MAKERA, SHIYAR HAKIMI', 585],
				['RIJIYAR KADE, SHIYAR HAKIMI', 470],
				['AGALAWA, SHIYAR HAKIMI', 374],
				['SABON GARI, SHIYAR HAKIMI', 272],
				['RUNJI, PRI. SCH.', 545],
				['KALALAWA, PRI. SCH I', 748],
				['KALALAWA, PRI. SCH II', 558],
				['TUTUBA, SHIYAR HAKIMI', 451],
				['KWALLATAWA, SHIYAR HAKIMI', 636],
				['MASHIDI, SHIYAR HAKIMI', 408]

			];
		}
	}