<?php
namespace App\Services\PollingUnit\Goronyo;
	
	class Rimawa
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'HOSPITAL (SHIYAR RAFI MAGAJI, DISPENSARY)',
				// 'GYAYYU/GODA GADO',
				// "YAR’KOFA (BULUN KUKUT)",
				// 'YARKOFA (RUNBUKAWA)',
				// 'BAKIN FANFO (MULLELA)',
				// 'KATSIRA',
				// 'JAR GABA',
				// 'KETA/MULLELA',
				// 'PRI. SCH. FALALIYA (FALIYA)',
				// 'DAN TUDU, DAN TUDU',
				// 'FLIN DUBA (DUBA JALLO S/FAWA)',
				// 'ZANGON ARAWA, ZANGO ARAWA',
				// 'KURI',
				// 'TAKARAU, TAKARAU',
				// 'MAHALBA',
				// 'DISPENSARY GIDAN KIRYA (GIDAN KIRYA)',
				// 'KAIKAZZAKA/AMBARURA',
				// 'BAKIN KASUWA (BIYARDA)',
				// 'RIYOJIN TANKA,JULI'
				
				['SHIYAR RAFI/MAGAJI, DISPENSARY', 1,500],
				['GYAYYU/GODA GADO',1058],
				['BULUN-BUKUT, BULUN BUKUT', 525],
				['RUMBUKAWA, RUMBUKAWA', 271],
				['MULLELA, MULLELA', 658],
				['KATSIRA', 472],
				['JAR GABA',547],
				['KETA/MULLELA', 841],
				['FALALIYA, FALALIYA', 989],
				['DAN TUDU, DAN TUDU', 674],
				['DUBA JALO S/FAWA', 724],
				['ZANGON ARAWA, ZANGO ARAWA',621],
				['KURI', 425],
				['TAKARAU, TAKARAU', 305],
				['MAHALBA', 332],
				['GIDAN KIRYA, GIDAN KIRYA', 305],
				['KAIKAZZAKA/AMBARURA',557],
				['BIYARDA', 368],
				['RIYOJIN TANKA,JULI', 457]
			];
		}
	}