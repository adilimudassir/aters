<?php
namespace App\Services\PollingUnit\Binji;

	class Samama
	{

		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'PRI. SCH. SAMAMA MARINA (SAMAMA MARINA)',
				// 'SAMAMA UNGULU',
				// 'GIDAN MAGAJI',
				// 'PRI. SCH G/ALMU (GIDAN ALMU)'
                ['SAMAMA MARINA', 990],
                ['SAMAMA UNGULU', 520],
                ['GIDAN  MAGAJI', 285],
                ['GIDAN ALMU', 569]

        ];
		}
	}
