<?php
namespace App\Services\PollingUnit\Goronyo;
	
	class Kojiyo
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'PRI. SCH (SHIYAR MAGAJI)',
				// 'G/KURMAN JAHADI (BARE TSARA)',
				// 'GAMIHAR HURI, GANIHAR HURI',
				// 'DARBABIYA DARBABIYA',
				// 'MALABA, MALABA'

				['SHIYAR MAGAJI', 1,443],
				['BARE TSARA',942],
				['GAMIHAR HURI, GANIHAR HURI', 597],
				['DARBABIYA DARBABIYA', 572],
				['MALABA, MALABA', 419]
			];
		}
	}