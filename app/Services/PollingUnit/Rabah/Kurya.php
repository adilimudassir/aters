<?php
namespace App\Services\PollingUnit\Rabah;
	
	class Kurya
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['SHIYAR AJIYA',749],
				['SHIYAR RAFI',679],
				['SHIYAR MAGAJI',493],
				['SHIYAR DAN HAJO',716],
				['SHIYAR KAIWAR DAWA',355],
				['SHIYAR ELAWO',365],
				['KWATTE‐MAGAJI‐KWATTEM AGAJI / SHIYAR KWATE MAGAJI',209]
			];
		}
	}