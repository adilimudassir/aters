<?php
namespace App\Services\PollingUnit\SabonBirni;

/**
* this class return the array of polling unit of the class
*/
class Tsamaye
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			// 'AMUZAWA ‐ AMUZAWA',
			// 'PRI.SCHOOL ‐ LABAU',
			// 'GIDAN SHEKARAU DANFILI',
			// 'BAWTARE ‐ BAWTARE',
			// 'TAKASUWA ‐ TAKASUWA',
			// 'GIDAN MIKO ‐ GIDAN MIKO',
			// 'GIDAN ‐ GAGO ‐ GIDAN GAGO',
			// 'GIDAN SHEKARAU DAN FILI',
			// 'PRI.SCHOOL ‐ TSAMAYE',
			// 'DUNKUDUMI ‐ DUNKUDUMI',
			// 'PRI.SCHOOL ‐ KURU‐KURU',
			// 'GIDAN DAGI ‐ GIDAN DAGI',
			// 'TSAMAYE PRI. SCH. (GIDAN MIKO)',
			// 'OLD PRI SCH. BORAI (BORAI)',
			// 'SANGU ‐ SANGU',
			// 'TSULULU PRI.SCHOOL ‐ TSULULU',
			// 'HUNKUI ‐ HUNKUI',
			// 'TSAMAYE DANFILI ‐ TSAMAYE'

				['AMUZAWA - AMUZAWA', 546],
				['PRI.SCHOOL - LABAU', 625],
				['GIDAN SHEKARAU DANFILI', 290],
				['BAWTARE - BAWTARE', 738],
				['TAKASUWA - TAKASUWA', 336],
				['GIDAN MIKO - GIDAN MIKO', 576],
				['GIDAN - GAGO - GIDAN GAGO', 567],
				['GIDAN SHEKARAU DAN FILI', 242],
				['PRI.SCHOOL - TSAMAYE', 587],
				['DUNKUDUMI - DUNKUDUMI', 520],
				['PRI.SCHOOL - KURU-KURU', 678],
				['GIDAN DAGI - GIDAN DAGI', 444],
				['TSAMAYE PRI. SCH. (GIDAN MIKO)', 585],
				['BORAI - BORAI', 430],
				['SANGU - SANGU', 304],
				['TSULULU PRI.SCHOOL - TSULULU', 467],
				['HUNKUI - HUNKUI', 544],
				['TSAMAYE DANFILI - TSAMAYE', 572]

		];
	}
}