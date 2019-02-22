<?php
namespace App\Services\PollingUnit\Binji;

class Binji
{
    public function __construct()
    {
        $this->pollingUnits = $this->pollingUnits();
    }

    public function pollingUnits()
    {
        return [
                // 'ALIYU JODI MPS (SHIYAR S/FAWA)',
                // 'AREA DEV. OFFICE BAJAGAWA (BAJAGAWA)',
                // 'ALIYU JODI MPS (S/DARAI PRI, SCH)',
                // 'GOVT. TECH. COLLEGE, BINJI (S/DARAI GOVT. TECH. COLL)',
                // 'VET. CLINIC DAWAKI (SHIYAR UBANDAWAKI)',
                // 'S. YAKI MPS (FILIN BADE',
                // 'ALIYI JODI MPS (S/SARKIN ASKI)',
                // 'AREA DEV. OFFICE FAWA (S/SARKIN FAWA)',
                // 'S. YAKI MPS (S/FAWA DAN FILI)',

                ['SHIYYAR SS/FAWA', 505],
                ['BAJAGAWA', 511],
                ['SHIYAR DARAI, PRY SCH SHIYAR DARAI', 1044],
                ['SHIYAR DARAI, GOVT TECH COLLEGE , BINJI', 538],
                ['SHIYAR U. DAWAKI', 788],
                ['FILIN BANDE', 919],
                ['SHIYAR SARKIN ASKI', 715],
                ['SHIYAR SARKI FAWA', 609],
                ['SHIYAR S/FAWA, DAN FILI', 545]


        ];
    }
}
