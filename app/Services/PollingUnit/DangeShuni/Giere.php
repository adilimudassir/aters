<?php
namespace App\Services\PollingUnit\DangeShuni;
	
	class Giere
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'MODEL PRY SCH, GIERE',
				// 'RIYOJIN FARU/DANFILI R/FARU (RIYOJIN FARU)',
				// 'DANBASAMU/DANFILI DANBASAWA (DANBASAWA)',
				// 'HETERETE',
				// 'DANFILI TSAHA KWAKWARA (AKALI)',
				// 'DANFILI BAKIN TSAHA TSAMIYAR GABAS (SIDINGU)',
				// 'DABAGI MPS',
				// 'BIRKITAWA/DANFILI BIRKITAWA (BIRKITAWA)',
				// 'HUNKUI',
				// 'SABADAWA/GARKAR SU NAIABU TUSHEN LIM (SABADAWA)',
				// 'GAJARA',
				// 'ZANFARAWA/TUSHIU LIM HANYAR GONA (ZAMFARAWA)',
				// 'MAJIYAR BARAYA',
				// 'DABAGI/MODEL PRIMARY SCHOOL DABAGI (KANWURI)',
				// 'DAMARI',
				// 'GEBEN DAMU'

				['MODEL PRY SCH, GIERE', 440],
				['RIYOJIN FARU, RIYOJIN FARU', 530],
				['DANBASAMU, DANBASAMU', 462],
				['HETERETE', 753],
				['AKALI', 323],
				['SIDINGU', 311],
				['DABAGI MPS', 907],
				['BIRKITAWA', 394],
				['HUNKUI',366],
				['SABADAWA, SABADAWA', 416],
				['GAJARA', 906],
				['ZAMFARAWA, ZAMFARAWA', 336],
				['MAJIYAR BARAYA', 675],
				['DABAGI KANWURI', 656],
				['DAMARI', 435],
				['GEBEN DAMU', 278]
			];
		}
	}