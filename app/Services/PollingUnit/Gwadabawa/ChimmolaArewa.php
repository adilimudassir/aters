<?php
namespace App\Services\PollingUnit\Gwadabawa;
	
	class ChimmolaArewa
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'MATSE, MATSE',
				// 'NEAR JUMUAT MOSQUE HERE (HERE, HERE/ GALA)',
				// 'NEAR JUMUAT MOSQUE SHIYAR LIMAN (SHIYAR LIMAN, TAMBAGARKA SH LIMAN)',
				// 'NEAR MOSQUE SHIYAR DAN ORO (SHIYAR DAN ORO)',
				// 'UNDER TREE SHADE, SHIYAR KAURA OPEN SPACE (SHIYAR KAURA)',
				// 'PRIMARY SCHOOL, KALABA (KALABA, KALABA)',
				// 'UNDER TREE SHADE (SHIYAR HAKIMI, ADANGERO/RANGANDAW)',
				// 'PRIMARY SCHOOL (KASUWA TUNGA MALAM RASHIDU)',
				// 'PRI. SCH. (SHIYAR HAKIMI, KAGOYE/ADOSA)',
				// 'UNDER TREE SHADE, WADAI OPEN SPACE (WADAI PRI. SCH. )',
				// 'UNDER TREE SHADE TATAYE (TATAYE PRY SCH. )',
				// 'UNDER TREE SHADE SHIYAR UBAN DAWAKI (SHIYAR UBANDAWAKI)',
				// 'UNDER TREE SHADE SH S.FULANI I (SHIYAR S/FULANI I)',
				// 'UNDER TREE SHADE SH S.FULANI II (SHIYAR S/FULANI II)',
				// 'UNDER TREE SHADE ADAMARE, TAMBAGARKA (ADAMARE, TAMBAGARKA S/UMAU ADAMARE)',
				// 'UNDER TREE SHADE SHIYAR KAURA (SHIYAR KAURA)'



				['MATSE, MATSE',706],
				['HERE, HERE/ GALA',604],
				['SHIYAR LIMAN, TAMBAGARKA SH LIMAN',442],
				['SHIYAR DAN ORO, SHIYAR DAN ORO',447],
				['SHIYAR KAURA (SHIYAR KAURA)',587],
				['KALABA, KALABA',654],
				['SHIYAR HAKIMI, DANGERO/RANGANDAWA',401],
				['KASUWA TUNGAR MALAM RASHIDU',487],
				['SHIYAR HAKIMI, KAGOYE/ADOSA',354],
				['WADAI, WADAI PRI. SCH. ',574],
				['TATAYE, TATAYE PRY SCH. ',454],
				['SHIYAR UBAN DAWAKI (SHIYAR UBANDAWAKI)',329],
				['SHIYAR S.FULANI I (SHIYAR S/FULANI I)',687],
				['SHIYAR S.FULANI II (SHIYAR S/FULANI II)',472],
				['ADAMARE, TAMBAGARKA (ADAMARE, TAMBAGARKA S/UMAU ADAMARE)',492],
				['SHIYAR KAURA (SHIYAR KAURA)',359]
			];
		}
	}