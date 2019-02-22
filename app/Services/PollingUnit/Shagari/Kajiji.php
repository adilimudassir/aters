<?php
namespace App\Services\PollingUnit\Shagari;
/**
* this class will return the array of its polling unit
*/
class Kajiji
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			['MPS KAJIJI BAKIN TITI (SHIYAR SANNA)',1017],
			['DAN HILI (SHIYAR AJIYA GAMAGIRA)',519],
			['MPS GAMAGIRA (SHIYAR AJIYA)',715],
			['MPS KESOJE (KESOJE S/HAKIMI)',667],
			['KESOJE ‐ PRI.SCHOOL',698],
			['AGGUR ‐ SHIYAR HAKIMI',515],
			['MPS TUDUN SHIFKAU (TUDUN SHIBKAU SHIYYAR HAKIMI)',479],
			['BABUJE MPS BABUJE (GIDAN DAN GARA)',419],
			['GIDAN DANGARA ‐SHIYAR HAKIMI',230],
			['LAFIYAR BATURE ‐ PRI.SCHOOL',446],
			['BUSAWA TASHAR KAJIJI',524],
			['(MPS ASARARA ASARARA S/HAKIMI)',448],
			['RUGGA PRI SCHOOL',504],
			['KAJIJI‐J.S.S',483]
		];
	}
}
