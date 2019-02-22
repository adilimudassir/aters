<?php
namespace App\Services\PollingUnit\Kebbe;
	
	class KebbeWest
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['ASARARA',579],
				['UMBUTU PRY SCH, UMBUTU (A)',1121],
				['RUNTUWA',307],
				['SHIYAR AJIYA, SHIYAR KEBBE',591],
				['SHIYAR S/FAWA',457],
				['SABON GARI',520],
				['UMBUTU, UMBUTU',924],
				['MASALLACIN TUNI D/HAYATU KURHI',631]
			];
		}
	}