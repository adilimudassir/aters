<?php
namespace App\Services\PollingUnit\Shagari;
/**
* this class will return the array of its polling unit
*/
class Jaredi
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			['JAREDI SHIYAR MAJIKIRA ‐ M.P.S',800],
			['JAREDI SHIYYAR MAGAJI',543],
			['TSAFARI',513],
			['NAKUZU',423],
			['RUNJIN BUZU',323],
			['RUGGAR GAMAU',593],
			['SIRE',394],
			['RUGGAR TUDU',425],
			['RUNTUWO',293],
			['LUDI',296]
		];
	}
}

