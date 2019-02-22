<?php

namespace App\Services\PollingUnit\Silame;

/**
* this class will return the polling units of all the 
*/
class MarafaEast
{
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return[
			['GUNKIN MAGAJI/GIDAN MAGAJI', 1,218],
			['DANJAWO/SHIYAR HAKIMI', 593],
			['KARANGIYA/SHIYAR HAKIMI', 886],
			['MARAFA/ADULT EDUCATION OFFICE', 634],
			['MARGA/SHIYAR HAKIMI', 626],
			['GUNGU/SHIYAR HAKIMI', 832],
			['GIDAN GERO/SHIYAR HAKIMI', 494]
		];
	}
}