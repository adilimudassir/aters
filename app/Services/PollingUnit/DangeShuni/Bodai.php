<?php
namespace App\Services\PollingUnit\DangeShuni;
	
	class Bodai
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'MODEL PRY SCH, BODAI GABAS',
				// 'FARIN DUTSE/TUSHIN LIM KOFAR GIDAN ABUBAKAR MAI GANDU (FARIN DUTSE)',
				// 'RUNJIN DUBI/DANFILI RUNJIN DUBI (GIDAN DUBI)',
				// 'GIDAN RUWA BABBAN GIDA B.G MAGAJINGARI (BISSALAM BABBAN GIDA)',
				// 'KAURAN MAGAJI P/S',
				// 'BODAI YAMMA G/ICCE',
				// 'HAIDARA/TUSHIN KAIWA OPPOSITE GIDAN HAKLIMI (HAIDARA)',
				// 'KUNKUNDU/TUSHILIM YAR KASUWA (DAN FILI, KUNKUNDO)',
				// 'MODEL PRY SCH, JURGA',
				// 'MAITAKOBI/TUSHIN LIM NAER MOSQUE (MAI TAKOBI)',
				// 'GANIKUI/TUSHIN BAGARUWA KUSA DA GIDAN MAL. GARBA (B.G. HAKIMI)',
				// 'YAR YARKASUWA BURGIJE'

				['MODEL PRY SCH, BODAI GABAS', 465],
				['FARIN DUTSI', 498],
				['RUNJIN DUBI', 488],
				['BISSALAM BABBAN GIDA', 479],
				['KAURAN MAGAJI P/S', 823],
				['BODAI YAMMA G/ICCE', 417],
				['HAIDARA', 362],
				['DAN FILI, KUNKUNDO', 472],
				['MODEL PRY SCH, JURGA', 588],
				['MAITAKOBI, MAITAKOBI', 347],
				['GANI KUI', 398],
				['YAR YARKASUWA BURGIJE', 328]
				
			];
		}
	}