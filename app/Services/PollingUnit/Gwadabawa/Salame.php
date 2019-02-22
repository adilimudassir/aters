<?php
namespace App\Services\PollingUnit\Gwadabawa;
	
	class Salame
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['JUMAT PMS, SHIYAR JEKADA',736],
				['LIBRARY SHIYAR JAKADA',813],
				['PRY SCH, ALMATAWA',1065],
				['SHIYAR HAKIMI, SHIYAR HAKIMI DOKA)',597],
				['SHIYAR HAKIMI SHIYAR ABU DABOWA',607],
				['PRY SCH, DABUWASA T. ZAKI',604],
				['YAR BULUTU KILIYAR SODANGI',567],
				['SHIYAR HAKIMI MARANAWA',599],
				['YANTAWAYA, SH. TUDUN BARAYA',710],
				['SHIYAR HAKIMI KOFAR MAGAJI',258],
				['DISPENSARY TUGAR SHANU',746],
				['DISPENSARY DAN ABBA',702],
				['DISPENSARY, DAN ABBA',413],
				['BINGA TOWN BONGA',599]
			];
		}
	}