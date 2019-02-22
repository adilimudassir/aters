<?php
namespace App\Services\PollingUnit\Gada;
	
	class Kadassaka
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'SHIYAR AJIYA',
				// 'SHIYAR JARI',
				// 'TUNDUN BULUS',
				// 'SHIYAR SARKIN YAYI',
				// 'GIDAN YARABA PRY SCH I',
				// 'TSAIDAWA, TSAIDAWA',
				// 'MAWA HABIBU',
				// 'KADASSAKA KILIYA, PRY SCH',
				// 'KILIYA, PRY SCH',
				// 'SHIYAR BAWA I',
				// 'SHIYAR BAWA II',
				// 'SHIYAR SANDA',
				// 'MAWA SANDA',
				// 'GIDAN YARABA PRY SCH II'
				
				['SHIYAR AJIYA', 823],
				['SHIYAR JARI',435],
				['TUNDUN BULUS', 920],
				['SHIYAR SARKIN YAYI', 587],
				['GIDAN YARABA PRY SCH I',853],
				['TSAIDAWA, TSAIDAWA', 809],
				['MAWA HABIBU', 267],
				['KADASSAKA KILIYA, PRY SCH', 816],
				['KILIYA, PRY SCH', 518],
				['SHIYAR BAWA I', 628],
				['SHIYAR BAWA II', 432],
				['SHIYAR SANDA', 510],
				['MAWA SANDA', 532],
				['GIDAN YARABA PRY SCH II', 529]
			];
		}
	}