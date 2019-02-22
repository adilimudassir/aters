<?php
namespace App\Services\PollingUnit\Rabah;
	
	class Tsamiya
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['SHIYAR DUNYA',943],
				['SHIYAR ANNA',981],
				['SHIYAR CHIDAWAKI',341],
				['SHIYAR GIGANE',334],
				['SHIYAR DAN ALI',329],
				['LUNGUN DUNYA ',253]
			];
		}
	}