<?php
namespace App\Services\PollingUnit\Binji;

class Bunkari
{

    function __construct()
    {
        # code...
        $this->pollingUnits = $this->pollingUnits();
    }

    public function pollingUnits()
    {
        return [
            // 'PRI. SCH., BUNKARI (UBAN DAWAKI)',
            // 'PRI. SCH. SHIYAR UBAN‐DAWAKI, FILI (UBAN DAWAKI D/FILI)',
            // 'PRI. SCH. BASHARU, (GIDAN BASHARU)',
            // 'BALIYO HAUSA/FULANI',
            // 'DANMALI GIDAN‐MAGAJI',
            // 'DAN MALI GIDAN BALIYO',
            // 'PRI. SCH. G/JAUBA (G/JAURO G/JAUGA)',
            // 'GIDA DILO PRI. SCH. (GIDAN DILO G/BUJI)'
            ['SHIYAR UBAN-DAWAKI, BUNKARI', 955],
            ['SHIYAR UBAN-DAWAKI, FILI', 787],
            ['SHIYAR BASHARU, GARKAR BASHARU', 747],
            ['BALIYO HAUSA/FULANI', 396],
            ['DANMALI GIDAN-M A GAJI', 726],
            ['DANMALI GIDAN BALIYO', 417],
            ['GIDAN-JAURO/GIDAN-HAKIMI G/JAUGA', 614],
            ['GIDA-DILO/GIDAN BUJI', 840]
        ];
    }
}
