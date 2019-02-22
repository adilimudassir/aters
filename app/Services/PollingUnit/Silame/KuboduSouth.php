<?php

namespace App\Services\PollingUnit\Silame;

/**
* this class will return the polling units of all the 
*/
class KuboduSouth
{
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return[
            ['TOZO SHIYAR MA KADA/PRI.SCHOOL TOZO', 767],
			["TOZO KA'ISA WALE/TOWN FIELD", 723],
			['JEKANADU BIRNI/TOWN FIELD', 719],
			['GABBUWA/PRI.SCHOOL GABBUWA', 618],
			['TULLURE / M.P SCHOOL', 599],
			['JEKANADU BAICHE/PRI.SCHOOL JEKANADU', 852]
		];
	}
}