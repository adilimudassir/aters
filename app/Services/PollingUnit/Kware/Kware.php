<?php
namespace App\Services\PollingUnit\Kware;
	
	class Kware
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'DOGON FILI, DANFILI',
				// 'SANGAME, SANGAME',
				// 'RUGGARWAKASO, R/WAKASO',
				// 'SHIYAR GAWO, SHIYAR GAWO',
				// 'UNDER TREE (KOFAR BARGA, SHIYAR BARGA)',
				// 'YAR YAHAYA, YAR YAHAYA',
				// 'TARAWA, TARAWA/ TARAWA',
				// 'RUNFAR FALKE, RUNFAR FALKE',
				// 'SANGAME, SANGAME',
				// 'KOFAR BARGA, SHIYAR BARGA'
				
				['DOGON FILI, DANFILI', 766],
				['SANGAME, SANGAME', 1,139],
				['RUGGARWAKASO, R/WAKASO', 760],
				['SHIYAR GAWO, SHIYAR GAWO', 803],
				['KOFAR BARGA, SHIYAR BARGA', 849],
				['YAR YAHAYA, YAR YAHAYA', 611],
				['TARAWA, TARAWA/ TARAWA', 1,182],
				['RUNFAR FALKE, RUNFAR FALKE', 762],
				['SANGAME, SANGAME', 802],
				['KOFAR BARGA, SHIYAR BARGA', 938]
			

			];
		}
	}