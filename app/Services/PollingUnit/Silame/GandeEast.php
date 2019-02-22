<?php

namespace App\Services\PollingUnit\Silame;

/**
* this class will return the polling units of all the 
*/
class GandeEast
{
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return[
			['DARGANA/MODEL PRI.SCHOOL', 353],
			['FALANJE/MODEL PRI.SCHOOL FALANJE', 314],
			['JERINGO/TOWN FIELD', 369],
			['KAYA/MODEL PRI.SCHOOL KAYA', 635],
			['MALE/MODEL PRI.SCHOOL', 692],
			['SHIYAR MAI YAKI/VILLAGE HEAD OFF.GANDE', 611],
			['SHIYAR MAI YAKI/VMODEL PRI.SCHOOL', 882],
			['SHIYAR MAI KABI/FILIN JARIRI', 491],
			['BOYIN GOJE/SHIYAR MASHAYA', 577],
			['BOYIN GOJE/KOFAR MALE', 834],
			['DARGANA‐DAN HILI', 419]     
		];
	}
}