<?php
namespace App\Services\PollingUnit\DangeShuni;
	
	class Shuni
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'JSS SHUNI',
				'SHUNI MODEL PRY SCHOOL',
				'SHUNI DISTRICT REGISTRATION CENTRE',
				'BAYO ILLELE',
				'RUGGAR KURA/ MODEL PRIMARY SCHOOL RUGAR KURA (RUGGAR KURA)',
				'TUDU/ MODEL PRIMARY SCHOOL TUDU (TUDU)',
				'GIDAN GIYE/ MODEL PRIMARY SCHOOL GIDAN/GIYE (GIDAN GIYE)',
				'GIRGIRI REGISTRATION CENTRE',
				'KWANDI/ MODEL PRIMARY SCHOOL KWANDI (KWANDI)',
				'BARAGAI/TUSHIN LIM HUSA DA MASSALLACI (BARAGAI)',
				'YAR MAI GADI/TSOHUWAR KUSUWA (YAR MAIGADI)',
				'DABAGIN DUGUI/FILIN FANKA (DABAGIN DUGUI)',
				'RUGGAR YAMMA/BAKIN FAMPO (RUGGAR YAMMA)',
				'KWANDI JEMAWA/PRIMARY SCHOOL KWANDI (KWNDI JEMANA)',
				'KOFAR TSAMIYA, DAN FARU',
				'SHUNI DISPENSARY'
			];
		}
	}