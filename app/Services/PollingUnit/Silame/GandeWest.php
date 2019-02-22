<?php

namespace App\Services\PollingUnit\Silame;

/**
* this class will return the polling units of all the 
*/
class GandeWest
{
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return[
			['GAUKAI/PRI.SCHOOL', 665],
			['GAUKAI/TOWN FIELD', 570],
			["KULALU/MODEL PRI'SCHOOL", 206],
			['CHOFAL TOWN FIELD', 760],
			['GIDAN KAYA/TOWN FIELD', 267],
			['GAUKAI TUNGA', 488],
			['GIDAN YAYA TANKARAWA', 334],
			['GIDANYAYA PRI.SCHOOL', 310]
		];
	}
}