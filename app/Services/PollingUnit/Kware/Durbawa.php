<?php
namespace App\Services\PollingUnit\Kware;
	
	class Durbawa
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'RUGGA, RUGGA',
				// 'SARKAWA, SARKAWA',
				// 'KAURA, KAURA',
				// 'DUNGUJI, DUNGUJI',
				// 'TORANKA DAKARE, TORANKA, DAKARE',
				// 'TORANKA DAWAKI, TORANKA DAWAKI',
				// 'GIDAN KULODO, GIDAN KULODO',
				// 'GIDAN GERO, GIDAN GERO',
				// 'KURFI, KURFI',
				// 'UNDER TREE SARKAWA (SARKAWA)'

				['RUGGA, RUGGA', 791],
				['SARKAWA, SARKAWA', 423],
				['KAURA, KAURA', 370],
				['DUNGUJI, DUNGUJI', 374],
				['TORANKA DAKARE, TORANKA, DAKARE', 481],
				['TORANKA DAWAKI, TORANKA DAWAKI', 630],
				['GIDAN KULODO, GIDAN KULODO', 538],
				['GIDAN GERO, GIDAN GERO', 360],
				['KURFI, KURFI', 345],
				['SARKAWA, SARKAWA', 421]

			];
		}
	}