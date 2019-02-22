<?php
namespace App\Services\PollingUnit\Isa;
	
	class Yanfako
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'LGEA PRI. SCH. YANFAKO (YANFAKO)',
				// 'LGEA PRI. SCH. TAKKIN HILI (TAKKIN HALI)',
				// 'LGEA PRI. SCH. DOGON HONO (DOGON HONO)',
				// 'LGEA PRI.SCH. (GARIN UBANDAWAKI)',
				// 'LGEA PRI. SCH. (ARAGA)',
				// 'LGEA PRI.SCH. (GALUBE)',
				// 'FILIN KASUWA (TAKALMAWA)',
				// 'LGEA PRI. SCH. (TABKIN HILI)'

				["YANFAKO", 538],
				['TAKKIN HILI', 454],
				['DOGON HANO', 341],
				['GARIN UBANDAWAKI', 701],
				['ARAGA', 590],
				['GALUBE', 498],
				['TAKALMAWA, TAKALMAWA', 511],
				['TABKIN HILI', 443]
			];
		}
	}