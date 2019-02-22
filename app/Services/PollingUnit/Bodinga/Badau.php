<?php
namespace App\Services\PollingUnit\Bodinga;
	
	class Badau
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'PRY SCH, DARHELA',
				// 'LUNGUN DARHELA P.S',
				// 'HILIN, DARHELA KAURA',
				// 'KWARWARA, DARHELA KAURA',
				// 'BADAU SH. FULANI SH/ HAKIMI',
				// 'BADAU SH DANGIWA SH/HAKIMI',
				// 'MAKARANTA DARHELA D. MALLE',
				// 'RUGGAR IGGE SH/HAKIMI',
				// 'JANGEBE ISLAMIC SCHOOL',
				// 'RAFIN SABO PRIMARY SCH',
				// "NORMADIC SCH. GWASTU (S/HAKIM GWASTU)",
				// 'SHIYAR HAKIMI, DUNKA',
				// "PRY SCH. BADAU (BADAU BAKIN KASUWA)"

				['PRY SCH, DARHELA', 496],
				['LUNGUN DARHELA P.S', 336],
				['HILIN, DARHELA KAURA', 275],
				['KWARWARA, DARHELA KAURA', 370],
				['BADAU SH. FULANI SH/ HAKIMI', 525],
				['BADAU SH DANGIWA SH/HAKIMI', 349],
				['MAKARANTA DARHELA D. MALLE', 645],
				['RUGGAR IGGE SH/HAKIMI', 280],
				['JANGEBE ISLAMIC SCHOOL', 503],
				['RAFIN SABO PRIMARY SCH', 483],
				['SHIYAR HAKIMI, GWASTU', 320],
				['SHIYAR HAKIMI, DUNKA', 346],
				['BADAU, BAKIN KASUWA', 403]
			];
		}
	}