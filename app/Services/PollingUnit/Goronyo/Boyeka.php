<?php
namespace App\Services\PollingUnit\Goronyo;
	
	class Boyeka
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'TSOHON GARIN BOYEKAI',
				// 'DAN FILI (SABON GARIN BOYEKAI)',
				// 'GAMIHAR/KAWARA',
				// 'YAR KOFA (YAR NAGGE)',
				// 'GIDAN SAIDU, GIDAN SAIDU'

				['TSOHON GARIN BOYEKAI', 878],
				['SABON GARIN BOYEKAI',769],
				['GAMIHAR/KAWARA', 390],
				['YAR NAGGE, YAR NAGGE', 666],
				['GIDAN SAIDU, GIDAN SAIDU', 189]

			];
		}
	}