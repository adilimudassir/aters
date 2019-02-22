<?php
namespace App\Services\PollingUnit\Gwadabawa;
	
	class Gigane
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				['SHIYAR MAGAJI, SHIYAR MAGAJI',431],
				['KARANBI, KARANBI',708],
				['SHIYAR TUDU, SHIYAR TUDU',324],
				['SHIYAR SAMRI, (SHIYAR SAMRI)',365],
				['SHIYAR SALIHU, (SHIYAR SALIHU)',577],
				['SHIYAR BAICI, (SHIYAR BAICI)',712],
				['TUNGAR NOMA (TUNGAR NOMA)',224],
				['PRY SCH, SAKAMARU',874],
				['GIDAN RANA, GIDAN RANA',397],
				['LABCHEDI, LABCHEDI',490],
				['GAMARU, GAMARU TUNGAR MALAM',375],
				['TUNKURU DIKKO/ T.GARBA TUNKURAR',637],
				['SHIYAR GALADIMA SHIYAR GALADIMA MELI',705],
				['SHIYAR TUDU, SH. TUDU MELI',687],
				['YOLABALE, YOLABALE',181],
				['GWARGWAWO, (GWARGWAWO)',224],
				['UNDER TREE SHADE SHIYAR LIMAN (SHIYAR LIMAN)',841],
				['GIDAN MAIDAMMA, GIDAN MAIDAMMA',279]
			];
		}
	}