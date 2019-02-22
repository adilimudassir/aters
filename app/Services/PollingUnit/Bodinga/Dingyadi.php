<?php
namespace App\Services\PollingUnit\Bodinga;
	
	class Dingyadi
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'PRY SCH, SHIYAR DANGALADIMA',
				// 'NIZZAMIYA, SHIYAR DANGALADIMA',
				// 'DISPENSARY, SHIYAR MAGAJI',
				// 'SHIYAR RAFI, SHIYAR RAFI',
				// 'KAURA BUBA PRY SCH',
				// 'KAURA BUBA',
				// 'PRY SCH, GIDAN KOKANI',
				// 'PRY SCH, GIDAN KIJJO',
				// "FILIN KASUWA JAGWANAWA (S.MAGAJI, GIDAN KIJJO)",
				// 'DISPENSARY, BADAWA',
				// 'PRY SCH, GARBA‐GARBA',
				// 'SHIYAR MAGAJI, RAHA',
				// "PRY. SCH. HAMIDAWA (S/ MAGAJI, HAMIDAWA)",
				// 'PRY SCH, RAHA',
				// 'DANFILI,RUNJI AUDU'

				['PRY SCH, SHIYAR DANGALADIMA', 714],
				['NIZZAMIYA, SHIYAR DANGALADIMA', 583],
				['DISPENSARY, SHIYAR MAGAJI', 637],
				['SHIYAR RAFI, SHIYAR RAFI', 433],
				['KAURA BUBA PRY SCH', 585],
				['KAURA BUBA', 515],
				['PRY SCH, GIDAN KOKANI', 437],
				['PRY SCH, GIDAN KIJJO', 358],
				['SHIYAR MAGAJI, GIDAN KIJJO', 372],
				['DISPENSARY,BADAWA', 546],
				['PRY SCH, GARBA-GARBA', 374],
				['SHIYAR MAGAJI, RAHA', 241],
				['SHIYAR MAGAJI, HAMIDAWA', 274],
				['PRY SCH, RAHA', 212],
				['DANFILI,RUNJI AUDU', 467]

			];
		}
	}

