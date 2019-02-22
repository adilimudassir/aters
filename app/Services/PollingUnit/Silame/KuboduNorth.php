<?php

namespace App\Services\PollingUnit\Silame;

/**
* this class will return the polling units of all the 
*/
class KuboduNorth
{
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return[
            ['KUBODUN SAMA/MODEL PRI.SCHOOL KUBODU', 751],
			['KUBODUN KASA / MODEL PRIMARY SCHOOL',641],
			['FAKARA BUDA/MODEL PRI.SCHOOL', 261],
			['SHABRA BUNARI TOWN FIELD', 378],
			['SHABRA ALKALI/MODEL PRI.SCHOOL', 547],
			['KUBODUN SAMA/PRI.SCHOOL', 438]
		];
	}
}