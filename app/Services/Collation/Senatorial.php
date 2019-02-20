<?php
namespace App\Services\Collation;
/**
* this class will return senatorial result
*/
use App\Lga;

class Senatorial
{

	function __construct()
	{
		$this->result = [
            [
                  'name' => 'SOKOTO CENTRAL',
                  'contestants' => [
                        'apc' => 'Aliyu Magatakarda Wamakko',
                        'pdp' => 'Muhammad Ahmed Maccido'],
                  'result' => $this->central()],
            [
                  'name' => 'SOKOTO SOUTH',
                  'contestants' => [
                        'apc' => 'Shehu Abubakar Tambuwal',
                        'pdp' => 'Abdullahi Ibrahim Danbaba'],
                  'result' => $this->south()],
            [
                  'name' => 'SOKOTO EAST',
                  'contestants' => [
                        'apc' => 'Gobir Ibrahim Abdullahi',
                        'pdp' => 'Maidaji Salihu'],
                  'result' =>$this->east()]
		];
	}

	protected function central()
	{
		$lga = [
            ['16', 'Sokoto North'],
            ['17', 'Sokoto South'],
            ['21', 'Wamakko'],
            ['10', 'Kebbe'],
            ['15', 'Silame'],
            ['1', 'Binji'],
            ['19', 'Tangaza'],
            ['6', 'Gudu'],
		];
		return $this->getResult($lga);
	}

	protected function south()
	{
		$lga = [
            ['2', 'Bodinga'],
            ['3', 'Dange Shuni'],
            ['20', 'Tureta'],
            ['14', 'Shagari'],
            ['23', 'Yabo'],
            ['18', 'Tambuwal'],
            ['11', 'Kware']

		];
		return $this->getResult($lga);
	}

	protected function east()
	{
		$lga = [
            ['7', 'Gwadabawa'],
            ['8', 'Illela'],
            ['4', 'Gada'],
            ['22', 'Wurno'],
            ['12', 'Rabah'],
            ['5', 'Goronyo'],
            ['13', 'Sabon Birni'],
            ['9', 'Isa'],

		];
		return $this->getResult($lga);
	}

	protected function getResult($array)
	{
	    $pdp = 0;
		$apc = 0;
		$other = 0;
        $invalid = 0;
        $registered = 0;
        $acredited = 0;

		foreach ($array as $lga) {

			$lga = Lga::find($lga[0]);
			$lga_result = $lga->result();
            $pdp = $pdp + $lga_result['senatorial']['pdp'];
            $apc = $apc + $lga_result['senatorial']['apc'];
            $other = $other + $lga_result['senatorial']['other'];
            $invalid = $invalid + $lga_result['senatorial']['invalid'];
            $registered = $registered + $lga->registered();
            $acredited = $acredited + $lga->acredited();

		}

		return [
            'pdp' => $pdp,
            'apc' => $apc,
            'other' => $other,
            'invalid' => $invalid,
            'acredited' => $acredited,
            'registered' => $registered
		];
	}
}
