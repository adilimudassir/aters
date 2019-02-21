<?php
namespace App\Services\PollingUnit\Binji;

class Jammali
{

    public function __construct()
    {
        # code...
        $this->pollingUnits =  $this->pollingUnits();
    }

    public function pollingUnits()
    {
        return [
            // 'PRI. SCH. JAMALI (JAMALI G/MAGAJI)',
            // 'PRI. SCH. FILIN KASUWA (FILIN KASUWA)',
            // 'DADDALE',
            // 'MASARAR FULANI',
            // 'DISPENSARY DALIJAN HAUSAWA (DALIJAN HAUSAWA)',
            // 'PRI. SCH. MAGAJI TOBI (GIDAN MAGAJI TOBI)',
            // 'JAMALI TOBI',
            // 'GIDAN KIRYA'

            ['JAMMALI G/MAGAJI', 618],
            ['FILIN KASUWA', 731],
            ['DADDALE', 445],
            ['MASARAR FULANI', 141],
            ['DALIJAN HAUSAWA', 437],
            ['GIDAN MAGAJI TOBI', 508],
            ['JAMALI TOBI', 614],
            ['GIDAN KIRYA', 493],];
    }
}
