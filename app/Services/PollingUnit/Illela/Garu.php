<?php
namespace App\Services\PollingUnit\Illela;
	
	class Garu
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'CHANCHAWA, HILI BABBA',
				// 'PRIMARY SCHOOL GARU GARI (GARU GARI S/MAGORI)',
				// 'GIDAN MAIGWANDU, HILI BABBA',
				// 'SHIYAR GALADIMA, G/GALADIMA',
				// 'SHIYAR WAKILI, KWAKWARA',
				// 'RUGGAR GARU, MAHAUTA',
				// 'GIDAN LABARAN, MAKARANTA',
				// 'GARU KURFAI, HILI',
				// 'MULLELA, HILI MULLELA',
				// 'SHIYAR TUDU DIBONI'

				['CHANCHAWA, HILI BABBA', 442],
				['GARU GARI, S/S/MAGORI',355],
				['GIDAN MAIGWANDU, HILI BABBA', 652],
				['SHIYAR GALADIMA, G/GALADIMA', 410],
				['SHIYAR WAKILI, KWAKWARA', 357],
				['RUGGAR GARU, MAHAUTA', 576],
				['GIDAN LABARAN, MAKARANTA', 362],
				['GARU KURFAI, HILI', 313],
				['MULLELA, HILI MULLELA',540],
				['SHIYAR TUDU DIBONI',233]

			];
		}
	}