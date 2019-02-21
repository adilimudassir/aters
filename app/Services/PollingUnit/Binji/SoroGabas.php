<?php
namespace App\Services\PollingUnit\Binji;

class SoroGabas
{
    public function __construct()
    {
        # code...
        $this->pollingUnits =  $this->pollingUnits();
    }

    public function pollingUnits()
    {
        return [
                // 'PRI. SCH. SORON GABAS (SORO GARKAR HAKIMI)',
                // 'MODEL PRY SCH, SORO',
                // 'GOHITTO, PRIMARY SCHOOL',
                // 'ISLAMIYA SCH. GOHITTO (GOHOTTO SHIYAR KANE)',
                // 'FAKO PRY SCH',
                // 'TUMUNI MAGAJ',
                // 'TUMUNI MAIYAKI, MAIYAKI PRI SCH',
                // 'KANDEZA PRI. SCHOOL',
                // 'JAMBOMA PRI. SCH. (JAMBOMA MAGAJI)'

                ['SORO  GARKAR HAKIMA', 595],
                ['MODEL PRY SCH, SORO', 685],
                ['GOHITTO, PRIMARY SCHOOL', 505],
                ['GWAHITTO SHIYAR KANE', 473],
                ['FAKO PRY SCH', 687],
                ['TUMUNI MA GAJI', 485],
                ['TUMUNI M A IYAKI, MAIYAKI PRI SCH', 418],
                ['KANDEZA PRI. SCHOOL', 712],
                ['JAMBOMA G/MAGAJI', 394]

        ];
    }
}
