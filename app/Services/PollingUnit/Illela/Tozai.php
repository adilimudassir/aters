<?php
namespace App\Services\PollingUnit\Illela;
	
	class Tozai
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'SHIYAR S. FAWA TOZAI, FILIN AGALE',
				// 'TOZAI S. HAKIMI, S. MAMMAN HAKIMI',
				// 'TOZAI BAYAN DUTSI, MAKARANTA',
				// 'MASAWA GIDAN KURA, HILI BABBA',
				// 'GIDAN S. FAWA, MAKARANTA',
				// 'GIDAN MAKERA',
				// 'GIDAN BANGO, MAKARANTA',
				// 'KORINGO, MAKARANTA',
				// 'GIDAN ABARSHI, GIDAN ABARSHI',
				// 'BALASKIYA, BALAKIYA',
				// 'CHOFA, CHOFA',
				// 'GIDAN AJIYA, GIDAN AJIYA'

				['SHIYAR S. FAWA TOZAI, FILIN AGALE', 344],
				['TOZAI S. HAKIMI, S. MAMMAN HAKIMI',386],
				['TOZAI BAYAN DUTSI, MAKARANTA', 562],
				['MASAWA GIDAN KURA, HILI BABBA', 313],
				['GIDAN S. FAWA, MAKARANTA', 321],
				['GIDAN MAKERA', 783],
				['GIDAN BANGO, MAKARANTA', 386],
				['KORINGO, MAKARANTA', 401],
				['GIDAN ABARSHI, GIDAN ABARSHI',349],
				['BALASKIYA, BALAKIYA', 395],
				['CHOFA, CHOFA' , 171],
				['GIDAN AJIYA, GIDAN AJIYA',368]

			];
		}
	}