<?php
namespace App\Services\PollingUnit\Gudu;
	
	class KarfenSarki
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['ASIBITIN GARI, KARFEN SARKI',573]
				['TOWN PRY SCH, KARFEN SARKI',573],
				['DAN FILI, FILASKO',344],
				['DAN FILI, HUDAR MARKE',394],
				['DAN FILI, TAURA MATA',614],
				['KARFEN SARKI DAN FILI KARFEN SARKI',479],
				['FILASKO‐DAN FILI',318]
			];
		}
	}