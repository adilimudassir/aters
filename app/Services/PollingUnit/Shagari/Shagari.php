<?php
namespace App\Services\PollingUnit\Shagari;
/**
* this class will return the array of its polling unit
*/
class Shagari
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			['SHIYAR MAGAJI ‐ SHIYAR SHAGARI',1232],
			['SHIYAR BIRNI ‐ SHAGARI',1377],
			['G.S.S SHAGARI',1144],
			['CHOFAL',970],
			['KAURA/SHIYAR HAKIMI',475],
			['WANKE ‐ MASALLACI',754],
			["WANKE MPS (WANKE MAKERA)",636],
			['MARAKE MODEL PRI.SCHOOL',555],
			["DAN HILI (GADARA S/HAKIMI)",553],
			["HAURA ‐ PRI.SCHOOL",492],
			['TUNGAR BAWA ‐ SHIYAR HAKIMI',390],
			["MPS JANZOMO (JANZOMO)",335],
			["MPS SAGE (SAGE SAGE/FILI)",604],
			['SHAGARI J.S.S',1324]
		];
	}
}
