<?php
namespace App\Services\PollingUnit\Isa;
	
	class Bargaja
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'BARGAJA, PRI. SCH.',
				// 'DAN FILI BARGAJA KIBIYA (BARGAJA SHIYAR KIBIYA)',
				// 'FAGE KASUWA (BARGAJA CHEDIYA)',
				// 'MODACI, FAGE',
				// 'D/ZANKE MAKARANTA',
				// 'LGEA PRI. SCH. MODACI SHIYAR HASSAN (MODACI SHIYAR HASSAN)',
				// 'LGEA PRI. SCH. LUGU (SHIYAR MAMMAN)',
				// 'GAZAU, MAKARANTA',
				// 'KALAGE, MAKARANTA',
				// 'D/ZANKE MAKARANTA'

				["BARGAJA, PRI. SCH.", 1,026],
				['BARGAJA KIBIYA, BARGAJA SHIYAR KIBIYA', 895],
				['BAGAJA CHIEDIYA', 952],
				['MODACI, FAGE', 1,412],
				['D/ZANKE MAKARANTA', 504],
				['MODACI SHIYA HASSAN, SHIYAR HASSAN/MODACHI S/HASSAN', 1078],
				['LUGU SHIYAR MAMMAN', 1,205],
				['GAZAU, MAKARANTA', 1,133],
				['KALAGE, MAKARANTA', 454],
				['D/ZANKE MAKARANTA', 752]
			];
		}
	}