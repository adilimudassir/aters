<?php
namespace App\Services\PollingUnit\DangeShuni;
	
	class Rudu
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'RUDU MAKERA',
				// 'GIDAN JADA/TUSHIN DAN FARU KUSA DA GIDAN S/FAWA (GIDAN JADA)',
				// 'PRIMARY SCHOOL SHIYAR DIKKO (GINDIN DIKKO)',
				// 'RUDU PRIMARY SCHOOL',
				// 'KALAUSA RAFI',
				// 'SHIYAR HAKIMI ',
				// 'HURUMI/GIDAN RUWA (HURUMI)',
				// 'AMANAWA CAMP',
				// 'GIDAN MANDE/ PRIMARY SCHOOL GIDAN MANDE (BAKIN GIDAN MANDE',
				// 'FILI MAKARANTA',
				// 'HURUMI MPS',
				// 'LUGGAR DAUDU/TUSHIN FARU KOFAR B (LUGGAR DAUDU)'

				['RUDU MAKERA', 489],
				['GIDAN JADA', 518],
				['SHIYAR DIKKO', 931],
				['RUDU PRIMARY SCHOOL', 495],
				['KALAUSA RAFI', 687],
				['SHIYAR HAKIMI', 455],
				['HURUMI, HURUMI', 419],
				['AMANAWA CAMP', 928],
				['GIDAN MANDE', 886],
				['FILI MAKARANTA', 869],
				['HURUMI MPS', 704],
				['LUGGAR DAUDA',408]
			];
		}
	}