<?php

namespace App\Services\PollingUnit\Silame;

/**
* this class will return the polling units of all the 
*/
class MarafaWest
{
	function __construct()
	{
		$this->pollingUnits();
	}

	protected function pallingUnit()
	{
		return[
			'TUNGAR ABDU/SHIYAR MAGAJI',
			'TUNGAR MAMBA/SHIYAR MAGAJI',
			'PRIMARY SCHOOL (TUNGAR YARO SHIYAR MAGAJI)',
			'PRIMARY SCHOOL GIDAN TUDU (GIDAN TUDU SHIYAR MAGAJI)',
			'MAJE SHIYAR NOMA/BURTALI',
			'PRIMARY SCHOOL (MAJEN SANYINNA SHIYAR SANYINNA)'
		];
	}
}