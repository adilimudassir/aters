<?php
namespace App\Services\PollingUnit\Gwadabawa;
	
	class Mammande
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['SH. S. YAKI, SHIYAR SARKIN YAKI',677],
				['SHIYAR SARKIN YAKI, SH. GALADIMA',492],
				['JEMA PRI. SCH. SHIYAR MAGAJI',554],
				['JEMA PRY SCH, SH. SHIYAR TUDU',562],
				['JEMA PRY SCH, SH. BAICI',601],
				['SHIYAR MUMUNI KOLAR ZAMANA/MAMAN',506],
				['BAMANA MADAWAKI (BAMANA SH. MADAWAKI)',304],
				['BAMANA MADAWAKI (BAMANA MADAWAKI SH/MAMMAN)',281],
				['WURIN INJI, BAMANA SH. GANGARE',300],
				['YAR KOFA, T/MASAWA/SH. ANARUWA',458],
				['GIDAN ARDO, ZUGANA',573],
				['SHIYAR ATIKU ZUGANA',809],
				['DISPENSARY, CHIRAGAL',391],
				['DISPENSARY GIDAN TUNE',230],
				['SHIYAR ARDO ZUGANA',623]
			];
		}
	}