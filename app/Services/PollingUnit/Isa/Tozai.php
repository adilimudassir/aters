<?php
namespace App\Services\PollingUnit\Isa;
	
	class Tozai
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'LGEA PRI. SCH. BAGARDA (BAGARDA)',
				// 'TOZAI MAKARANTA',
				// 'LGEA PRI. SCH. SATIRU (SATIRU SHIYAR BARI)',
				// 'LGEA PRI. SCH. SATIRU (SATIRU SHIYAR MAIGARI)',
				// 'LGEA PRI. SCH. KATANGA (KATANGA)',
				// 'LGEA PRI. SCH. DAN ADAMA (DAN ADAMA)',
				// 'BAGARDA, BAGARDA',
				// 'LGEA PRI. SCH. SATIRU (SATIRU SHIYAR MANI D/MAKU)'

				["BAGARDA, BAGARDA", 458],
				['TOZAI MAKARANTA', 825],
				['SATIRU, SHIYAR BARI', 546],
				['SATIRU SHIYAR MAIGARI', 658],
				['KATANGA, KATANGA',724],
				["DAN'ADAMA", 538],
				['BAGARDA, BAGARDA', 637],
				['SATIRU SHIYAR MANI D/MAKAU', 486],
				['TABKIN HILI', 443]

			];
		}
	}