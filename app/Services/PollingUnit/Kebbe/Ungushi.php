<?php
namespace App\Services\pollingUnit\Kebbe;
	
	class Ungushi
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['GWANDI PRY SCH, GWANDI',754],
				['SHIYAR MAGAJI UNGUSHI',635],
				['SH UBANDAWAKI UNGUSHI',741],
				['UNGUSHI ASIBITI',1084],
				['PRY SCH MAIKURFUNA',497],
				['MAIKURFUNA GIDAN GARSO',728]
			];
		}
	}