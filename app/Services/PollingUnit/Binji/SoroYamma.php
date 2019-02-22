<?php
namespace App\Services\PollingUnit\Binji;

class SoroYamma
{

    public function __construct()
    {
        # code...
        $this->pollingUnits = $this->pollingUnits();
    }

    public function pollingUnits()
    {
        return [
            // 'KALGO, MALLAMAWA',
            // 'KALGO PRI. SCH',
            // 'KURA GIDAN DIKKO PRI. SCH. (KURA GARKA DIKKO)',
            // 'KURA SHIYAR KANE',
            // 'BIRNI WARI G/JAUGA PRI. SCH. (BIRNI WAI G/JAUGA)',
            // 'BIRNIN‐WARI GAJARE',
            // 'KARANI PRI. SCH. PRI. SCH. (KARANI MASALACI S. HAKIMI)',
            // 'KARANI SABON‐ZAMA',
            // 'ALELA GIDAN ARDO',
            // 'ALELA DARUSA'

            ['KALGO , MALLAMAWA', 502],
            ['KALGO PRI. SCH', 648],
            ['KURA GARKAR DIKKO', 708],
            ['KURA SHIYAR KANE', 446],
            ['BIRNIN WARI G/JAUGA', 559],
            ['BIRNIN-WARI GAJARE', 545],
            ['KARANI MASALLACI', 616],
            ['KARANI SABON-ZAMA', 323],
            ['ALELA GIDAN ARDO', 336],
            ['ALELA DARUSA', 246]
        ];
    }
}
