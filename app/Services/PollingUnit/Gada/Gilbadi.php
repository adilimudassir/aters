<?php
namespace App\Services\PollingUnit\Gada;
	
	class Gilbadi
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'GILBADI GARI, DISPENSARY',
				// 'GIDAN ADA, DAN FILI',
				// 'GIDAN ABDO, PRY SCH',
				// 'GIDAN KACHA, PRY SCH',
				// 'TSARO MAIKASUWA, PRY SCH',
				// 'GIDAN LIYAL PRY SCH',
				// 'GIDAN YARFADA, PRY SCH',
				// 'GIDAN AYUBA PRY SCH',
				// 'TAKALMAWA , PRY SCH',
				// 'GIDAN MAITURARE',
				// 'TSARO MALAMAI',
				// 'GUNDUNBUL, PRY SCH',
				// 'GIDAN MAIJAGUWA PRY SCH',
				// 'GIDAN MAI TURARE, SHIYAR MAGAJI',
				// 'GIDAN JOBI PRY SCH',
				// 'SAKITAWA, PRY SCH',
				// 'GIDAN BASHARA',
				// 'GIDAN AJANBO SHIYAR MAGAJI',
				// 'SABON GARI GILBADI',
				// 'GIDAN DARHU'

				['GILBADI GARI, DISPENSARY',801],
				['GIDAN ADA, DAN FILI', 498],
				['GIDAN ABDO, PRY SCH', 512],
				['GIDAN KACHA, PRY SCH',485],
				['TSARO MAIKASUWA, PRY SCH', 492],
				['GIDAN LIYAL PRY SCH', 398],
				['GIDAN YARFADA, PRY SCH', 234],
				['GIDAN AYUBA PRY SCH', 467],
				['TAKALMAWA , PRY SCH', 202],
				['GIDAN MAITURARE', 508],
				['TSARO MALAMAI', 235],
				['GUNDUNBUL, PRY SCH', 301],
				['GIDAN MAIJAGUWA PRY SCH', 413],
				['GIDAN MAI TURARE, SHIYAR MAGAJI', 476],
				['GIDAN JOBI PRY SCH', 165],
				['SAKITAWA, PRY SCH', 213],
				['GIDAN BASHARA', 147],
				['GIDAN AJANBO SHIYAR MAGAJI', 429],
				['SABON GARI GILBADI', 287],
				['GIDAN DARHU', 453]
			];
		}
	}