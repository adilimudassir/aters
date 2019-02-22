<?php
namespace App\Services\PollingUnit\Gada;
	
	class Tsitse
	{
		
		function __construct()
		{
			
			$this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'KARANGIYA',
				// 'GIDAN ADAWA PRY SCH',
				// 'GIDAN HASHIMU I',
				// 'KOROJI',
				// 'GIDAN GULBI',
				// 'GIDAN SHEKARAU, DAN FILI',
				// 'JINGILMA, PRY SCH',
				// 'SHIYAR DAN GALADIMA',
				// 'GASAHO',
				// 'GIDAN KAURA',
				// 'BASANA',
				// 'GIDAN TUDU',
				// 'GIDAN HASHIMU II',
				// 'TSITSE , PRY SCH'

				['KARANGIYA',761],
				['GIDAN ADAWA PRY SCH', 649],
				['GIDAN HASHIMU I', 494],
				['KOROJI',255],
				['GIDAN GULBI', 592],
				['GIDAN SHEKARAU, DAN FILI', 873],
				['JINGILMA, PRY SCH', 425],
				['SHIYAR DAN GALADIMA', 602],
				['GASAHO', 498],
				['GIDAN KAURA', 416],
				['BASANA', 547],
				['GIDAN TUDU', 546],
				['GIDAN HASHIMU II', 611],
				['TSITSE , PRY SCH', 416]
			];
		}
	}