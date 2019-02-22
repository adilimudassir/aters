<?php
namespace App\Services\PollingUnit\Kware;
	
	class S_Birni
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'JINGINE, JINGINE',
				// 'UNDER TREE TUNGAR MAIJAKKAI (TUNGAR MAIJAKKAI)',
				// 'GIDAN JAHADI, GIDAN JAHADI',
				// 'IHI, IHI',
				// 'GUNDUNGA YALO',
				// 'GUNDUNDA ALKALI',
				// 'GUNDUNGA ALKALI SHIYAR HAKIMI',
				// 'GIDAN KARMA PRI. SCH.',
				// 'BALKORI, PRI. SCH.',
				// 'SABON BIRNI, PRI. SCH.',
				// 'JAJAYE, SHIYAR HAKIMI',
				// 'DOBAH, SHIYAR HAKIMI',
				// 'TUNGAR AMMA, SHIYAR HAKIMI',
				// 'BELA, SHIYAR HAKIMI',
				// 'MALAKIWA, SHIYAR HAKIMI'

				['JINGINE, JINGINE', 714],
				['TUNGAR MAIJAKKAI, TUNGAR MAIJAKKAI', 612],
				['GIDAN JAHADI, GIDAN JAHADI', 445],
				['IHI, IHI', 455],
				['GUNDUNGA YALO', 686],
				['GUNDUNDA ALKALI', 796],
				['GUNDUNGA ALKALI SHIYAR HAKIMI', 846],
				['GIDAN KARMA PRI. SCH.', 790],
				['BALKORI, PRI. SCH.', 769],
				['SABON BIRNI, PRI. SCH.',724],
				['JAJAYE, SHIYAR HAKIMI', 360],
				['DOBAH, SHIYAR HAKIMI', 682],
				['TUNGAR AMMA, SHIYAR HAKIMI', 351],
				['BELA, SHIYAR HAKIMI', 328],
				['MALAKIWA, SHIYAR HAKIMI', 464]

			];
		}
	}