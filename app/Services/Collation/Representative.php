<?php
namespace App\Services\Collation;

/**
* this class will return the sumary of election result at representative level
*/
use App\Services\Collation\Senatorial;
use App\Lga;

class Representative
{
    public function __construct()
    {
        $this->result = [
            [
            'name'=>'SOKOTO NORTH / SOKOTO SOUTH',
            'result'=>$this->sokotoNorth(),
            'contestants' => [
                        'apc' => 'Abubakar III Hassan Bala',
                        'pdp' => 'Abubakar Abdullahi Ahmad'
                    ],
        ],
            [
            'name'=>'WAMAKKO / KWARE',
            'result'=>$this->kware(),
            'contestants' => [
                        'apc' => 'Ahmad Abdullahi Kalambaina',
                        'pdp' => 'Muhammed Bello Abubakar'],
        ],
            [
            'name'=>'SILAME / BINJI',
            'result'=>$this->binji(),
            'contestants' => [
                        'apc' => 'Muhammed Nabunkari Sa`adu',
                        'pdp' => 'Mani Maishinko'],
        ],
            [
            'name'=>'TANGAZA / GUDU',
            'result'=>$this->gidangyadi(),
            'contestants' => [
                        'apc' => 'Yusuf Isah Kundila',
                        'pdp' => 'Isah Salihu Bashar'],
        ],
            [
            'name'=>'WURNO / RABAH',
            'result'=>$this->wurno(),
            'contestants' => [
                        'apc' => 'Aliyu Ibrahim Almustapha',
                        'pdp' => 'Kabiru Marafa Achida'],
        ],
            [
            'name'=>'GORONYO / GADA',
            'result'=>$this->gada(),
            'contestants' => [
                        'apc' => 'Sarkin-Adar Musa',
                        'pdp' => 'Muhammad Bello Aliyu'],
        ],
            [
            'name'=>'SABON BIRNI / ISAH',
            'result'=>$this->sabonBirni(),
            'contestants' => [
                        'apc' => 'Sani Aminu Isah',
                        'pdp' => 'Muhammed Saidu Bargaja'],
        ],
            [
            'name'=>'GWADABAWA / ILLELA',
            'result'=>$this->gwadabawa(),
            'contestants' => [
                        'apc' => 'Balarabe Salame Abdullahi',
                        'pdp' => 'Haliru Garba Gidan Hamma'],
        ],
            [
                'name' => 'TAMBUWAL / KEBBE',
                'result' => $this->tambuwal(),
                'contestants' => [
                    'apc' => 'Kokani Bala',
                    'pdp' => 'Abdulssamad Dasuki'
                ],
            ],
            [
                'name' => 'YABO / SHAGARI',
                'result' => $this->yabo(),
                'contestants' => [
                    'apc' => 'Umaru Abubakar yabo',
                    'pdp' => 'Aminu Shehu Shagari'
                ],
            ],
            [
                'name' => 'BODINGA / DANGE SHUNI / TURETA',
                'result' => $this->bodinga(),
                'contestants' => [
                    'apc' => 'Shehu Aliyu A',
                    'pdp' => 'Balarabe Shehu Kakale'
                ],
            ],
        ];
    }

    protected function sokotoNorth()
    {
        $lga = [
            ['16', 'Sokoto North'],
            ['17', 'Sokoto South'],
        ];
        return $this->getResult($lga);
    }

    protected function kware()
    {
        $lga = [
            ['10', 'Kware'],
            ['21', 'Wamakko'],
        ];
        return $this->getResult($lga);
    }
    protected function binji()
    {
        $lga = [
            ['1', 'Binji'],
            ['15', 'Silame'],
        ];
        return $this->getResult($lga);
    }
    protected function gidangyadi()
    {
        $lga = [
            ['6', 'Gudu'],
            ['19', 'Tangaza'],
        ];
        return $this->getResult($lga);
    }
    protected function tambuwal()
    {
        $lga = [
            ['11', 'Kebbe'],
            ['18', 'Tambuwal'],
        ];
        return $this->getResult($lga);
    }
    protected function yabo()
    {
        $lga = [
            ['14', 'Shagari'],
            ['23', 'Yabo'],
        ];
        return $this->getResult($lga);
    }
    protected function bodinga()
    {
        $lga = [
            ['2', 'Bodinga'],
            ['3', 'Dange Shuni'],
            ['20', 'Tureta']
        ];
        return $this->getResult($lga);
    }
    protected function wurno()
    {
        $lga = [
            ['12', 'Rabah'],
            ['22', 'Wurno'],
        ];
        return $this->getResult($lga);
    }
    protected function gada()
    {
        $lga = [
            ['4', 'Gada'],
            ['5', 'Goronyo'],
        ];
        return $this->getResult($lga);
    }
    protected function sabonBirni()
    {
        $lga = [
            ['9', 'Isa'],
            ['13', 'Sabon Birni'],
        ];
        return $this->getResult($lga);
    }
    protected function gwadabawa()
    {
        $lga = [
            ['7', 'Gwadabawa'],
            ['8', 'Illela'],
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
            $pdp = $pdp + $lga_result['representative']['pdp'];
            $apc = $apc + $lga_result['representative']['apc'];
            $other = $other + $lga_result['representative']['other'];
            $invalid = $invalid + $lga_result['representative']['invalid'];
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
