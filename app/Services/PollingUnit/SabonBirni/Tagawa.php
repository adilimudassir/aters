<?php
namespace App\Services\PollingUnit\SabonBirni;

/**
* this class return the array of polling unit of the class
*/
class Tagawa
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [

			['PRI.SCHOOL ‐ SHIYAR MARAFA',731],
			['J.S.S ‐ SHIYAR MAGAJI I',739],
			['J.S.S ‐ SHIYAR MAGAJI II', 867],
			['SHIYAR BAWA GADE I', 535],
			['SHIYAR BAWA GADE II', 576],
			['SHIYAR MARAFA', 635],
			['DUNKAWA', 580],
			['DANKURA', 468],
			['GAMJI', 558],
			['SANGERAWA ‐ SANGERAWA', 409],
			['ARAGA', 643],
			['DAMA', 415],
			['GIDAN AHATANO I', 661],
			['GIDAN AHATANO II', 531] ,
			['BURKUSUMA', 594],
			['MAGIRA TUDU', 471],
			['MAGIRA KWARE', 460],
			['GYANGYADI', 489],
			['KATSALLEN KADE', 424],
			['TAKALMAWA ‐ TAKALMAWA', 525],
			['ASHA BANZA', 266],
			['MALLAMAWA', 411]
		];
	}
}