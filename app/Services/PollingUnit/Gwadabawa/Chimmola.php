<?php
namespace App\Services\PollingUnit\Gwadabawa;
	
	class Chimmola
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['PRY SCH MODEL MAIWADA',306],
				['SHIYAR SARKIN YARI, S. YAKI I',333],
				['SHIYAR MAGAJI, SHIYAR MAGAJI',369],
				['DAN LABAU MASAKA SHANU (SHIYAR SIKOLA, SH HAUSAWA)',233],
				['SHIYAR HAKIMI, SH KAGARA',624],
				['ADARAWA, SHIYAR HAKIMI HASHI',377],
				['SHIYAR HAKIMI, LUKUWA',435],
				['SHIYAR SAIDU, SHIYAR SAIDU LUKUWA',281],
				['SHIYAR HAKIMI T. TUDU KWANKWAN BALI',552],
				['BUZALEGA SH, BUZALEGA',285],
				['SHIYAR HAKIMI , KWAKWANGO',581],
				['SHIYAR II YAKO',283]
			];
		}
	}