<?php
namespace App\Services\PollingUnit\Goronyo;
	
	class DanTasakko
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'IFED (SHIYAR GALADIMA)',
				// 'SHIYAR ZAKI',
				// 'BAKIN KASUWA (DAN SILBA)',
				// 'GIDAN MAGAJIYA',
				// 'BIJEJI',
				// 'IFED (TSOHON GARIN DOLE)',
				// 'DANTASAKKO',
				// 'SARWA',
				// 'DISPENSARY OLOLI KAMITAU (OLOLO KAMITAU)',
				// 'GUNDUMI',
				// 'MALAFARU',
				// 'IFED (KUBUTTA)',
				// 'DANWARU',
				// "YAR’KOFA (KUNAWA)"
				
				['SHIYAR GALADIMA', 844],
				['SHIYAR ZAKI',635],
				['DANSILBA', 453],
				['GIDAN MAGAJIYA', 622],
				['BIJEJI', 515],
				['TSOHON GARIN DOLE', 570],
				['DANTASAKKO',506],
				['SARWA', 178],
				['OLOLI KAMITAU', 623],
				['GUNDUMI', 842],
				['MALAFARU', 774],
				['KUBUTTA',329],
				['KUNAWA', 213],
				['DANWARU', 935]
			];
		}
	}