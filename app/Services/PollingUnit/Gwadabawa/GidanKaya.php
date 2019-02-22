<?php
namespace App\Services\PollingUnit\Gwadabawa;
	
	class GidanKaya
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['MAKARANTA SHIYAR MAGAJI',442],
				['LUKUMAWA SHIYAR MAGAJI',410],
				['DAN FILI SHIYAR BAURA',560],
				['FILIN INJIN, SHIYAR BAURA',651],
				['SHIYAR HAKIMI TAKALMAWA',282],
				['SHIYAR HAKIM KILILAWA',366],
				['ASIBITI YAR GADA MULLELA',796],
				['SHIYAR HAKIMI, GALADIMAN TSABRE',550],
				['SHIYAR HAKIMI DAN GWAYA/K.DAUDU',312],
				['ASIBITI MARINNAWA G. DOGAZA',322],
				['MAKARANTA/DAN FANGA/TALHI',316],
				['GWARA / DANCHA',460],
				['SHIYAR HAKIMI TUDUN MAIDUSA',324],
				['SHIYAR HAKIMI GIDAN DUTSI R./ADUW )',475],
				['SHIYAR HAKIMI GIDAN BIRGAU',334],
				['SHIYAR HAKIMI KAURA KAYAMA',322],
				['SHIYAR MAGAJI MAKANTA SH MAGAJI',479]
			];
		}
	}