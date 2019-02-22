<?php
namespace App\Services\PollingUnit\DangeShuni;
	
	class RuggarGidado
	{
		
		function __construct()
		{
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'ILLELA GAKAR HKM/PRIMARY SCHOOL (ILLELA GARKAR HAKIMI)',
				// 'ILLELA M.P.S',
				// 'KWANNAWA JALI/ PRIMARY SCHOOL K/JALI (KWANNAWA JALI)',
				// 'BANGANANGE',
				// 'DILINGU',
				// 'SAMBO DARNI',
				// 'DANBARUNJE/MODEL PRIMARY SCHOOL DAN‐BURUNJE (DAN BURUNJI)',
				// 'GYALAUDE B',
				// 'BAILA',
				// 'DABAGIN RIKINA/PRIMARY SCHOOL D/RIKINA (DABAGIN RIKINA)',
				// 'RUGGAR DUBBU',
				// 'RAFIN JIDDA',
				// 'ZANGO, ZANGO',
				// 'ILLELA RUGGAR DUBU/ PRIMARY SCHOOL R/DUBU (ILLELA RUG. DUBU)',
				// 'NAGANDI, NAGANDI'
				
				['ILLELA G HAKIMI', 479],
				['ILLELA M.P.S', 522],
				['KWANNAWA JALI', 346],
				['BANGANANGE', 534],
				['DILINGU', 304],
				['SAMBO DARNI', 542],
				['DAN BARUNJE', 626],
				['GYALAUDE B', 550],
				['BAILA', 701],
				['DABAGIN RIKINA', 651],
				['RUGGAR DUBBU', 350],
				['RAFIN JIDDA', 328],
				['ZANGO, ZANGO', 283],
				['ILLELA R/DUBU', 394],
				['NAGANDI, NAGANDI', 339]
			];
		}
	}