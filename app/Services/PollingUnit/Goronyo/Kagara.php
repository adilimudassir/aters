<?php
namespace App\Services\PollingUnit\Goronyo;
	
	class Kagara
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'SHIYAR MARAFA',
				// 'SHIYAR SARKAWA',
				// 'SHIYAR SANYAYA, BALLA',
				// 'KAWADATA/ KAWADATA',
				// 'DAN FILI (ILLELA DAWAGARE)',
				// 'YAR’KOFA (DANJORO)',
				// 'RIJIYA M/SALIHU (KUDA KUDA)'

				['SHIYAR MARAFA', 1,060],
				['SHIYAR SARKAWA',708],
				['SHIYAR SANYAYA, BALLA', 875],
				['KAWADATA/ KAWADATA', 307],
				['ILLELA DAWAGARE, DAWAGARE', 822],
				['DANJIRO, DANJIRO', 623],
				['KUDA - KUDA', 331]
			];
		}
	}