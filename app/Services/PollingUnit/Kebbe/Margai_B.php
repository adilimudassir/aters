<?php
namespace App\Services\PollingUnit\Kebbe;
	
	class Margai_B
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['UNWALA, UNWALA',425],
				['MARGAI SHIYAR SALLAMA M ADA',761],
				['MARGAI SHIYAR KAURA',1081],
				['GAURU KASUWAR MAGAJI',425],
				['KARMA D/HILI',693],
				['D/HILI',365],
				['ILLELA D/HILI',370]
			];
		}
	}