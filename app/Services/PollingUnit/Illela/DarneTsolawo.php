<?php
namespace App\Services\PollingUnit\Illela;
	
	class DarneTsolawo
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'DARNA TSOLAWO, MAKARANTA',
				// 'UNDER A TREE GIDAN RANA (GIDAN RANA)',
				// 'BIRNIN ISAH',
				// 'UNDER A TREE DANKADU (DAN KADU)',
				// 'UNDER A TREE KALABA (KALABA KALABA)',
				// 'GIDAN ALASAN, G/ALASAN',
				// 'UNDER A TREE ZANGO (ZANGO)',
				// 'DABAGIN TANKARI, D/TANKARI',
				// 'DANTULLE, DANTULLE',
				// 'YARDARNA',
				// 'DABAGIN TANKARI, DABAGIN TANKARI'
				
				['DARNA TSOLAWO, MAKARANTA', 767],
				['GIDAN RANA',274],
				['BIRNIN ISAH', 282],
				['DANKADU', 600],
				['KALABA, KALABA', 403],
				['GIDAN ALASAN, G/ALASAN', 330],
				['ZANGO ZANGO', 411],
				['DABAGIN TANKARI, D/TANKARI', 269],
				['DANTULLE, DANTULLE',325],
				['YARDARNA', 238],
				['DABAGIN TANKARI, DABAGIN TANKARI', 273]
			];
		}
	}