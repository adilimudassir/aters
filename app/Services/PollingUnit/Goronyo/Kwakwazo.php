<?php
namespace App\Services\PollingUnit\Goronyo;
	
	class Kwakwazo
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'DISPENSARY (KWAKWAZO SH/NOMA)',
				// 'TANTAR KWAI, TANTAR KWAI',
				// 'GARKAR SALAU (TUKAYAN MUSAA/TUKAYAN SALAU)',
				// 'RUNGUMAWA, RUNGUMAWA',
				// 'MAGANGA, MAGANGA',
				// 'GIDAN FAKO',
				// 'GIDAN GEZU',
				// 'ZAMACE, ZAMACE/ZAMACHEN DAN TSOHUWA',
				// 'YAMIN KWABE, YAMIN KWABE',
				// 'GIDAN BARAU, GIDAN BARAU',
				// 'DAN FILI (MIYAL YAKO)',
				// 'KWAKWAZO, KWAKWOZO PRY SCH'

				['KWAKWAZO S/NOMA', 1,493],
				['TANTAR KWAI, TANTAR KWAI',811],
				['TUKAYACI MUSA/TUKAYAN SALAU', 484],
				['RUNGUMAWA, RUNGUMAWA', 115],
				['MAGANGA, MAGANGA', 688],
				['GIDAN FAKO', 927],
				['GIDAN GEZU', 356],
				['ZAMACE, ZAMACE/ZAMACHEN DAN TSOHUWA', 315],
				['YAMIN KWABE, YAMIN KWABE', 709],
				['GIDAN BARAU, GIDAN BARAU', 573],
				['MIYALYAKO, MIYALYAKO', 624],
				['KWAKWAZO, KWAKWOZO PRY SCH', 844]

			];
		}
	}