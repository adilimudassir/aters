<?php
namespace App\Services\PollingUnit\Goronyo;
	
	class Birjingo
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'BIRJINGO',
				// 'MALLAMAWA',
				// 'BABAN FILI (WARANKAI)',
				// 'BAKIN RIJIYA (TULUTTU DAN FILI)',
				// 'DAN FILI (GANZA BUNGI)',
				// 'GIDAN TUDU, GIDAN TUDU',
				// 'DAN FILI (KUMUINIYA/FURAGIRKE)',
				// 'TULUTTU, TULUTTU PRY SCH'

				['BIRJINGO', 1,276],
				['MALLAMAWA',592],
				['WARANKAI', 870],
				['TULUTTU, DAN FILI', 594],
				['GANZA/BUNGI', 474],
				['GIDAN TUDU, GIDAN TUDU', 598],
				['KUMUINIYA/FURAGIRKE',450],
				['TULUTTU, TULUTTU PRY SCH', 594]
			];
		}
	}