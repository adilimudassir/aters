<?php
namespace App\Services\PollingUnit\Goronyo;
	
	class Shinaka
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'JINGILMA SHINAKA',
				// 'SHIYAR MABA, HAILIN NA MAZO',
				// 'SHIYAR BAURA, SHINAKA',
				// 'SHIYAR NOMA, SHIYAR NOMA',
				// 'SHIYAR GAYAWA',
				// 'TULUSKE, TULUSKE',
				// 'PRI. SCH. ACIIDO (ACHLIDO G/TOROO)',
				// 'DANTUDU MASARI',
				// 'ZAMALE / KUTUTTURU',
				// 'GIDAN ALFARMA, GIDAN ALFARMA',
				// 'GIDAN ABDO, GIDAN ABDO',
				// 'KURHIYAWA/TAJAYE',
				// 'GIDAN MICHIKAL',
				// "YAR’CHEDIYA (SHIYAR MABA YANCHEDIYA, SHINAKA)",
				// 'SHIYAR MABA, AJA SHINAKA',
				// 'MASARI, MASARI'

				['JINGILMA SHINAKA', 988],
				['SHIYAR MABA, HAILIN NA MAZO',933],
				['SHIYAR BAURA, SHINAKA', 871],
				['SHIYAR NOMA, SHIYAR NOMA', 769],
				['SHIYAR GAYAWA', 692],
				['TULUSKE, TULUSKE', 1,237],
				['ACIIDO/GIDAN TORO',854],
				['DANTUDU MASARI', 554],
				['ZAMALE / KUTUTTURU', 526],
				['GIDAN ALFARMA, GIDAN ALFARMA', 407],
				['GIDAN ABDO, GIDAN ABDO', 295],
				['KURHIYAWA/TAJAYE',500],
				['GIDAN MICHIKAL', 184],
				['SHIYAR MABA YANCHEDIYA, SHINAKA', 897],
				['SHIYAR MABA, AJA SHINAKA', 758],
				['MASARI, MASARI', 486]
			];
		}
	}