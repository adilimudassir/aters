<?php
namespace App\Services\PollingUnit\Gada;
	
	class Gada
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'OLD DISTRICT HEAD OFFICE GADA (GARKAR MARAFA)',
				// 'FILIN MAGAMA HUDU GADA (SHIYAR SARKIN GADA)',
				// 'DAN MARIDO I',
				// 'DANDUTSE',
				// 'S. GARI',
				// 'S. KAURAWA',
				// 'BIGAL',
				// 'TUNGAR SAHI',
				// 'BERIDI',
				// 'GIDAN KUMMU I',
				// 'GIDAN KUMMU II',
				// 'MASUKI',
				// 'LUNGUSU',
				// 'G. KARO',
				// 'G. HAMMA',
				// 'GIDAN BARHI',
				// 'S/ADARAWA',
				// 'G. DANSUDA',
				// 'G. ISIYAKA',
				// 'GIDAN ABUBAKAR',
				// 'G. MADAGU I',
				// 'G. MADAGU II',
				// 'DANMARIDO II',
				// 'S/DANFILI'

				['GARKAR MARAFA', 2,265],
				['SHIYAR SARKIN GADA', 1,243],
				['DAN MARIDO I', 288],
				['DANDUTSE', 1,825],
				['S. GARI', 675],
				['S. KAURAWA', 614],
				['BIGAL', 945],
				['TUNGAR SAHI', 744],
				['BERIDI', 661],
				['GIDAN KUMMU I', 453],
				['GIDAN KUMMU II', 22],
				['MASUKI', 622],
				['LUNGUSU', 529],
				['G. KARO', 645],
				['G. HAMMA', 1,304],
				['GIDAN BARHI', 548],
				['S/ADARAWA', 1,617],
				['G. DANSUDA', 875],
				['G. ISIYAKA', 359],
				['GIDAN ABUBAKAR', 456],
				['G. MADAGU I', 34],
				['G. MADAGU II', 220],
				['DANMARIDO II', 703],
				['S/DANFILI', 785]
			];
		}
	}