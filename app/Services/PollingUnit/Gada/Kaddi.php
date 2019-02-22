<?php
namespace App\Services\PollingUnit\Gada;
	
	class Kaddi
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'ISLMIYYA (KADDI SH.MAGAJI)',
				// 'KADDI SABON GARI',
				// 'GIDAN ILLO, SHIYAR MAGAJI',
				// 'KWARMA ALKALI, PRY SCH',
				// 'GIDAN GADO I',
				// 'GIDAN BAGIRBI, SHIYAR MAGAJI',
				// 'GIDAN DAN YARO, SHIYAR MAGAJI',
				// 'GIDAN GADABO PRI. SCH.',
				// 'TSURURU MADUGU, SHIYAR MAGAJI',
				// 'ISLAMIYYA SCH. (KADDI TUDU SHIYAR MAGAJI)',
				// 'GIDAN JATAU, SHIYAR MAGAJI',
				// 'GADABO PRY SCH',
				// 'GIDAN GYADO, PRY SCH. II',
				// 'SHIYAR MAGAJ PRIMARY SCHOOL (GIDAN UBANDOMA SHIYAR MAGAJI)',
				// 'GADABO, PRY SCH GADABO'

				['KADDI SH. MAGAJI, ISLAMIYYA', 1,013],
				['KADDI SABON GARI', 795],
				['GIDAN ILLO, SHIYAR MAGAJI', 412],
				['KWARMA ALKALI, PRY SCH',689],
				['GIDAN GADO I', 619],
				['GIDAN BAGIRBI, SHIYAR MAGAJI', 298],
				['GIDAN DAN YARO, SHIYAR MAGAJI', 454],
				['GIDAN GADABO PRI. SCH.', 757],
				['TSURURU MADUGU, SHIYAR MAGAJI', 680],
				['KADDI TUDU, SHIYAR MAGAJI', 434],
				['GIDAN JATAU, SHIYAR MAGAJI', 647],
				['GADABO PRY SCH', 380],
				['GIDAN GYADO, PRY SCH. II', 717],
				['GIDAN UBANDOMA, SHIYAR MAGAJI', 520],
				['GADABO, PRY SCH GADABO', 477]
			];
		}
	}