<?php
namespace App\Services\PollingUnit\Goronyo;
	
	class Goronyo
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'KAMFALA (SHIYAR BUGAJE)',
				// 'SHIYAR SARKIN YAKI, YARKOFA',
				// 'SHIYAR MADATSA, MADATSA',
				// 'DAN FILI (SHIYAR NOMA)',
				// 'SHIYAR SABONGARI, BUGAJE PRY SCH',
				// 'RUMFAR DOKA (SHIYAR YAMMA, YANHUDU)',
				// 'MA’AHADU ISLAMIYA (ZAMFARAWA)',
				// 'DAN FILI KIRARE (KIRAREN DUSTI)',
				// 'ILLELA/MARIRI, ILLELA',
				// 'TALOKA/BADAMA, BADAMA',
				// 'FILIN KASUWA (TALOKA KANWURI)',
				// 'BALA KOZO, BALA KOZO',
				// 'GARE, GARE',
				// 'GADON MATA, GADON MATA',
				// 'KUMAJI, KUMAJI',
				// 'BAKIN RIJIYA (TALOKA GADAWA)',
				// 'ASARARA, STADIUM GORONYO',
				// 'KIRARE, KIRARE PRY SCH'

				['SHIYAR BUGAJE, SHIYAR BUGAJE', 1,211],
				['SHIYAR SARKIN YAKI, YARKOFA',1,030],
				['SHIYAR MADATSA, MADATSA', 1,398],
				['SHIYAR NOMA, SHIYAR NOMA', 885],
				['SHIYAR SABONGARI, BUGAJE PRY SCH', 1,279],
				['SHIYAR YAMMA, YANHUDU', 1,032],
				['ZAMFARAWA, ZAMFARAWA', 1,063],
				['KIRAREN DUTSI, KIRAREN DUTSI',415],
				['ILLELA/MARIRI, ILLELA', 1,249],
				['TALOKA/BADAMA, BADAMA', 894],
				['TALOKA KANWURI - KANWURI', 991],
				['BALA KOZO, BALA KOZO', 498],
				['GARE, GARE', 855],
				['GADON MATA, GADON MATA',1048],
				['KUMAJI, KUMAJI', 1,517],
				['TALOKA, GADDAWA - GADDAWA', 869],
				['ASARARA, STADIUM GORONYO', 1,669],
				['KIRARE, KIRARE PRY SCH', 726]
			];
		}
	}