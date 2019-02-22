<?php
namespace App\Services\PollingUnit\Shagari;
/**
* this class will return the array of its polling unit
*/
class Sanyinnawal
{
	
	function __construct()
	{
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			['SANYINNAWAL ‐ SHIYAR YAMMA',839],
			['SANYINNAWAL/KANWURI',823],
			['MPS YARDUTSI (SANYINNAWAL YARDUTSI)',710],
			['MPS RUNJIN KAKA (RUNJIN KAKA)',943],
			['KAROGA ‐ SHIYAR HAKIMI',435],
			['MPS TOFA GARIN (TOFA)',335],
			['MPS BADUKA (BADUKA/YOLA/NAHUCE)',311],
			['KALANGU MPS (KALANGU)',680],
			['KAURARE/YAR‐GUSAU',460],
			['KAURARE CLINIC (KABAWA/BULAN YAK)I',615],
			['CLINIC BULANYAKI ‐ ZAMFARAWA (BULAN YAKI ZAMFARAWA)',716],
			['CLINIC BULANYAKI/MARINA (BULAN YAKI MARINA)',691],
			['KAROGA ‐ PPRI.SCHOOL',487]
		];
	}
}
