<?php

namespace App\Services\PollingUnit\Silame;

/**
* this class will return the polling units of all the 
*/
class Silame
{
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return[
			['SHIYAR MARAFA/WOMEN CENTRE',844],
			['SHIYAR MARAFA/BURMAWA', 729],
			['SHIYAR BUNU/M.P .SCHOOL', 1,066],
			['SHIYAR BUNU/MARINA SILAME', 710],
			['LAININKASA/PRI.SCHOOL LAINI', 549],
			['DANKALA DIKKO/ TOWN FIELD', 1,150],
			['DALMI/M.P.SCHOOL', 411],
			['GYATTARANA/TOWN FIELD', 722],
			['KAMASU/TOWN FIELD', 232],
			['SHIYAR MARAFA/WOMEN CENTRE', 569],
			['SHIYAR BUNU / MODEL PRI. SCHOOL',912]
		];
	}
}