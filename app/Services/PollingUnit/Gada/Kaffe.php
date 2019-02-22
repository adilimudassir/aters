<?php
namespace App\Services\PollingUnit\Gada;
	
	class Kaffe
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'SHIYAR HAMMA',
				// 'SHIYAR SARIKIN YAKI',
				// 'GIDAN ZOMO',
				// 'ALI BAWA SHIYAR SANI',
				// 'BANTALAWA',
				// 'SAFIYAL MAGORI',
				// 'YAGARMAWA',
				// 'BANTALAW S/MAGAJI',
				// 'SAFIYAR MAGORI',
				// 'S/SANI WAKILI'

				['SHIYAR HAMMA',830],
				['SHIYAR SARIKIN YAKI', 770],
				['GIDAN ZOMO', 531],
				['ALI BAWA SHIYAR SANI',823],
				['BANTALAWA', 238],
				['SAFIYAL MAGORI', 610],
				['YAGARMAWA', 691],
				['BANTALAW S/MAGAJI', 517],
				['SAFIYAR MAGORI', 726],
				['S/SANI WAKILI', 1,006]
			];
		}
	}