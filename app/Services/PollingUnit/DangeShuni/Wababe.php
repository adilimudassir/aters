<?php
namespace App\Services\PollingUnit\DangeShuni;
	
	class Wababe
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'WABABE KUDU/PRIMARY SCHOOL WABABE (GIDAN IFAD)',
				// 'WABABE PRY SCH, WABABE MPS',
				// 'WABABE GABAS/ PRIMARY SCHOOL (WABABE GABAS GIDAN HAKIMI)',
				// 'HAMMARE/ PRIMARY SCHOOL HAMMARE (HAMMARE GIDAN HAKIMI)',
				// 'DONAMA/BAYAN GIDAN HAKIMI (BAYAN GIDAN H/DONAWA)',
				// 'MODEL PRY SCH, YOLA',
				// 'PRIMARY SCHOOL DABAGIN WABABE (BAYAN MASALLACI WABABE)',
				// 'PRIMARY SCHOOL KARADAGE (GIDAN MAL. ALTINE)',
				// 'HAUSARE P. SCHOOL',
				// 'PRIMARY SCHOOL DALI (MALAM HANTSI/ GIDAN M. N DALI)',
				// 'DORAWAR DIKKO/COLLAPSED PRIMARY SPACE (RAKWAMNI',
				// 'MODEL PRY SCH, SALAU',
				// 'MODEL PRY SCH, SUKANDU',
				// 'FILIN YARKASUWA, ILLELAR SALAU',
				// 'BELEL BAKIN RIJIYA'

				['GIDAN IFAD, WABABE KUDU', 711],
				['WABABE PRY SCH, WABABE MPS', 806],
				['WABABE GABAS - SHIYAR G. HAKIMI', 884],
				['HAMMARE, HAMMARE', 240],
				['BAYAN GIDAN H/DONAWA', 157],
				['MODEL PRY SCH, YOLA', 498],
				['BAYAN MASSALACI, DABAGIN WABABE', 495],
				['G.M ALTINE KARADAGE', 455],
				['HAUSARE P. SCHOOL', 914],
				['HANYAR GIDAN MALAM HANTSI, MALAM HANTSI/ GIDAN M. N DALI', 394],
				['DORAWAR DIKKO, RAKWAMNI', 507],
				['MODEL PRY SCH, SALAU', 303],
				['MODEL PRY SCH, SUKANDU', 442],
				['FILIN YARKASUWA, ILLELAR SALAU', 269],
				['BELEL BAKIN RIJIYA', 425]
			];
		}
	}