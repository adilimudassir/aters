<?php
namespace App\Services\PollingUnit\DangeShuni;
	
	class Rikina
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'LAFFI/PRIMARY SCHOOL LAFFI (LAFFI)',
				// 'LUGGERE/ PRIMARY SCHOOL (LUGGERE)',
				// 'SHIYAR ABARMA',
				// 'SHIYAR SHEHU/GIDAN RUWA RIKINA (SHIYAR SHEHU)',
				// 'BUBARI BABBA',
				// 'KWANA/KONGON‐RIMA BASIN (KWANA)',
				// 'MAJO/ PRIMARY SCHOOL MAJO (MAJO GIDAN DIKKO)',
				// 'SABARU/ PRIMARY SCHOOL SABARU (SABARU)'

				['LAFFI, LAFFI', 761],
				['LUGGERE, LUGGERE', 419],
				['SHIYAR ABARMA', 913],
				['SHIYAR SHEHU', 628],
				['BUBARI BABBA', 577],
				['KWANA, KWANA', 908],
				['MAJO/GIDAN DIKKO', 382],
				['SABARU', 1,215]
			];
		}
	}