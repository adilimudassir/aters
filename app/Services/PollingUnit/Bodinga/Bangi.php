<?php
namespace App\Services\PollingUnit\Bodinga;
	
	class Bangi
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'DABAGA PRY SCH, SHIYAR MARAFA',
				// 'GIDAN AJIYA, SHIYAR MARAFA',
				// 'SHIYAR HAKIMI, WURO ELDE',
				// "PRY. SCH. MAIKATORO (MAIKATORO/S HAKIMI)",
				// 'SHIYAR HAKIMI, KYALUJE',
				// 'SHIYAR HAKIMI, CHOFI',
				// "DISPENSARY WUMUMU (WUMUMU, S/S/DUTSI)",
				// "PRY. SCH. BANGI DUTSE (BANGI DUTSE, S/MARAFA)",
				// "BANGIRAFI PRY SCH. SH‐SARKI",
				// 'KWAMTSI KASUWA',
				// 'SHIYAR HAKIMI, LUGE',
				// "MAKARANTA BATSAUJE (BATSAUJE, S/NOMA)",
				// 'BATSAUJE, SHIYAR BARADE',
				// 'PRY SCH, DUTSIN MAIGUNYA',
				// 'SHIYAR HAKIMI, GIDAN GADANGA',
				// "MAKARANTABANGI DUTSI (BANGI DUTSI S/DANGALADIMA)"

				['DABAGA PRY SCH, SHIYAR MARAFA', 863],
				['GIDAN AJIYA, SHIYAR MARAFA', 737],
				['SHIYAR HAKIMI, WURO ELDE', 571],
				['MAIKATARO/SHIYAR HAKIMI', 482],
				['SHIYAR HAKIMI, KYALUJE', 346],
				['SHIYAR HAKIMI, CHOFI', 309],
				['WUMUMU, SHIYAR S/DUTSI', 450],
				['BANGI DUTSE, SHIYAR MARAFA', 225],
				['BANGIRAFI PRY SCH. SH-SARKI', 445],
				['KWAMTSI KASUWA', 323],
				['SHIYAR HAKIMI, LUGE', 286],
				['BATSAUJE, SHIYAR NOMA', 500],
				['BATSAUJE, SHIYAR BARADE', 191],
				['PRY SCH, DUTSIN MAIGUNYA', 322],
				['SHIYAR HAKIMI, GIDAN GADANGA', 333],
				['BANGI DUTSI, SHIYAR DAN GALADIMA', 589]
			];
		}
	}

