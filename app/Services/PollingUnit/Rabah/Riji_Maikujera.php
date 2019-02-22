<?php
namespace App\Services\PollingUnit\Rabah;
	
	class Riji_Maikujera
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['SHIYAR MAGAJI KUSAGA G. HAKIMI',1275],
				['SHIYAR HAKIMI‐BAKIN KASUWA',1094],
				['SHIYAR BAZAI ‐ SHIYARGAZA',979],
				['GIDAN MAIRAGO ‐ MODEL PRI.SCHOOL',226],
				['MARINAWA‐MODEL PRY SCH',390],
				['GUAN DANAYA‐DANFILI',278]
			];
		}
	}