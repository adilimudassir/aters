<?php
namespace App\Services\PollingUnit\Kware;
	
	class Basansan
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'UNDER TREE BASANSAN (BASANANSAN S/HAKIMI)',
				// 'BASANSAN BASANSA PRI. SCH.',
				// 'MODAWA, SHIYAR HAKIMI',
				// 'GIDANMUTUNE, SHIYAR HAKIMI',
				// 'LEMI, PRI. SCH.',
				// 'TAINO, PRI. SCH.',
				// 'RUNBUKI, SHIYAR HAKIMI',
				// 'SIRE DANDORO, SHIYAR HAKIMI',
				// 'GIDAN AIKI, SHIYAR HAKIMI'

				['BASANSN, SHIYAR HAKIMI', 413],
				['BASANSAN BASANSA PRI. SCH.', 462],
				['MODAWA, SHIYAR HAKIMI', 199],
				['GIDANMUTUNE, SHIYAR HAKIMI', 338],
				['LEMI, PRI. SCH.', 318],
				['TAINO, PRI. SCH.', 393],
				['RUNBUKI, SHIYAR HAKIMI', 323],
				['SIRE DANDORO, SHIYAR HAKIMI', 365],
				['GIDAN AIKI, SHIYAR HAKIMI', 426]
			];
		}
	}