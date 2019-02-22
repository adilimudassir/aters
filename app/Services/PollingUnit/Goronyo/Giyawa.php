<?php
namespace App\Services\PollingUnit\Goronyo;
	
	class Giyawa
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'SHIYAR GALADIMA, GALADIMA',
				// 'YARKOFA (SHIYAR UBANDAWAKI)',
				// 'SHIYAR FADAMA, FADAMA',
				// 'FARINGIDA, FARINGIDA'

				['SHIYAR GALADIMA, GALADIMA', 911],
				['SHIYAR UBANDAWAKI',665],
				['SHIYAR FADAMA, FADAMA', 819],
				['FARINGIDA, FARINGIDA', 883]
			];
		}
	}