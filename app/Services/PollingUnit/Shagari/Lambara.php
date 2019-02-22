<?php
namespace App\Services\PollingUnit\Shagari;
/**
* this class will return the array of its polling unit
*/
class Lambara
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			['LAMBARA ‐ MODEL PRI.SCHOOL',762],
			['LAMBARA ‐ SHIYAR KOFAR',1118],
			['DAN HILI (ILLELA KAURA DABORE)',483],
			['DUWOJI/DALIJAN /DUNDEJI OPEN SPACE (DUWOJI/DALIJAN /DUNDEJI)',430],
			['GIDAN BAURA/ELA ‐ ELA',470],
			['MPS BADIYAWA (S/YAKI BADIYAWA)',498],
			['DORUWA ‐ DORUWA',809],
			['GIDAN TUDU/GIDAN ARDO‐SHIYAR ARDO',275],
			['BELA ‐ BELA',418],
			['GIDAN MASKAYAU (GIDAN MASKAYAU)',477],
			['GIDAN BUNGA/ GARIN BUNGA',350],
			['GIDAN GAMBO ‐ GARIN GIDAN GAMBO',209],
			['JANDUTSI ‐ SHIYAR HAKIMI',332],
			['BAKYA ‐ GARIN BAKYA',143],
			['GULORU ‐ SHIYAR MAKERA',212]
		];
	}
}
