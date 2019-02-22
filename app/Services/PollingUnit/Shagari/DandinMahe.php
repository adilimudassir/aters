<?php
namespace App\Services\PollingUnit\Shagari;
/**
* this class will return the array of its polling unit
*/
class DandinMahe
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			['SHIYAR MAGAJI MAMMAN/DANDIN MAHE',1276],
			['SHIYAR MAGAJI BAWA',866],
			['SHIYAR GALADIMA',1172],
			['HELMOWA RUMBUKI ',638],
			['R/AKALI / SESSEDA',626],
			['MABERA, GIDAN SALAU',764],
			['RUGGAR MALAM ',510],
			['KWACIYO / LAKATI',265],
			['GINGA KANWURI MAIDABO',527],
			['GINGA MPS',461],
			['ZANGO / KAURARE',266],
			['ASARARA',380],
			['RUGGAR MAGAJI KAGAT',647],
			['GWANAI ',297],
			['GWAMMANAN RUGGAR YAMMA',511],
			['MANAJI RUGGAR FAKO',531],
			['GIDAN MAGANA ',368],
			['ILLELA /ERA',548]
		];
	}
}
