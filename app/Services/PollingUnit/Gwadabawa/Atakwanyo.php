<?php
namespace App\Services\PollingUnit\Gwadabawa;
	
	class Atakwanyo
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['PRY SCH, ATAKWANYO',593],
				['SHIYAR MASALLAU, ATAKWANYO',349],
				['PRY SCH, WAZI BASA',568],
				['PRIMARY SCHOOL TASHAR GAWO, (TASHAR GAWO ATTAKWANYO GUSAU)',515],
				['PRY SCH, BURDI',433],
				['KANGIYEN DAN INNA, KANGIYEN DAN INNA',599],
				['PRIMARY SCHOOL KANGIYEN T/GIWA (SH. HAKIMI KUNGIYEN T/GIWA)',441],
				['DAN FILI, OPEN SPACE (KATALAR DUTSI, KATALAR DUTSI)',352],
				['PRIMARY SCHOOL KATTALAR KAURA (KATALAR KAURA, KAT., KAURA)',560],
				['KAN WURI (ABO KIRE)',481],
				['CHOBAL PRI. SCH.',301],
				['PRI. SCH. GIDAN MAGAJI WAZARI',518],
				['GWARGWA PRY SCH, GWARAGWA',479]
			];
		}
	}