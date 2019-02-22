<?php

namespace App\Services\PollingUnit\Silame;

/**
* this class will return the polling units of all the 
*/
class Labani
{
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return[
			['LABANI/MODEL PRI.SCHOOL', 1,424],
			['ALFALA / TOWN FIELD', 701],
			['KWAGGEL/TOWN FIELD', 728],
			['BETARE/TOWN FIELD', 688],
			['GALADI/PRI.SCHOOL', 514],
			['RUMDI/MODEL PRY SCH.', 377],
			['RUMBUKI/TOWN FIELD', 916]
		];
	}
}