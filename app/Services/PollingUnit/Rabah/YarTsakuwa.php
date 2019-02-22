<?php
namespace App\Services\PollingUnit\Rabah;
	
	class YarTsakuwa
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['SHIYAR UBANDAWAKI',701],
				['SHIYAR AJIYA',627],
				['SABON GARI SABON GARI I',846],
				['SABON GARI ‐ M.P.S II',799],
				['BADAMMA',652],
				['TSAMAWA',692],
				['SANGIWA M.P.S',458],
				['JIGARA',256],
				['RAHAH ‐ RAHAH',383],
				['DANBANDA',535],
				['SIDINGO ‐ SIDINGO',251]
			];
		}
	}