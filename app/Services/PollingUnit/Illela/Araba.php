<?php
namespace App\Services\PollingUnit\Illela;
	
	class Araba
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'SHIYAR KATUNE, HILI BABBA',
				// 'SHIYAR GALADIMA, HILIN TUDU',
				// 'SHIYAR KATUNE, TSAMIYA',
				// 'BAKIN DUTSI, HILI BABBA',
				// 'GIDAN KAMIL, G/MALAM TUNAU',
				// 'UNDER A TREE HURA (HURA GIDAN MAGAJI)',
				// 'DANBOKA, GIDAN TUDU',
				// 'ZANGO ALKASON, GIDA MAGAJI',
				// 'DANGO S. MAGAJI, HILI',
				// 'DANGO S/JIBO, KWAKWARA',
				// 'SH/KATUNE ARABA MAKARANTA',
				// 'BAKIN DUTSI, MAKARANTA',
				// 'DAN BOKA, MAKARANTA'
				
				['SHIYAR KATUNE, HILI BABBA', 783],
				['SHIYAR GALADIMA, HILIN TUDU',876],
				['SHIYAR KATUNE, TSAMIYA', 611],
				['BAKIN DUTSI, HILI BABBA', 524],
				['GIDAN KAMIL, G/MALAM TUNAU', 340],
				['HURA, GIDAN MAGAJI', 299],
				['DANBOKA, GIDAN TUDU', 536],
				['ZANGO ALKASON, GIDA MAGAJI', 514],
				['DANGO S. MAGAJI, HILI',549],
				['DANGO S/JIBO, KWAKWARA', 621],
				['SH/KATUNE ARABA MAKARANTA', 1,042],
				['BAKIN DUTSI, MAKARANTA', 529],
				['DAN BOKA, MAKARANTA',553]

			];
		}
	}