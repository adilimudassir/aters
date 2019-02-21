<?php
namespace App\Services\PollingUnit\Binji;

class Maikulki
{
    public function __construct()
    {
        # code...
        $this->pollingUnits =  $this->pollingUnits();
    }

    public function pollingUnits()
    {
        return [
                // 'MAI KULKI PRI. SCH. (SHIYAR HAKIMI MAI KULKI)',
                // 'PRI. SCH. KAWURI MAIKULKI (KAWURI MAIKULKI)',
                // 'PRI. SCH. SHIYAR MARINA MAIKULKI (S/MARINA MAIKULKI)',
                // 'PRI. SCH SHIYAR MARINA YAMMA (SHIYAR MARINA YAMMA)',
                // 'RAGA LABAU MAKARANTA',
                // 'HIZNA MAKARANTA, HIZNA',
                // 'UDDIBA G/DIKKO MAMBA',
                // 'KUSA DA GARKAR MAGAJI, MARGAI',
                // 'MALIYON ALMU, MALIYO',
                // 'KAN‐WURI MAIKULKI, FINLIN BARU'

               ['SHIYAR HAKIMI, MAI KULKI', 746],
               ['KAN WURI MAIKULKI', 754],
               ['SHIYAR MARINA, MAIKULKI', 686],
               ['SHIYAR MARINA YAMMA', 680],
               ['RAGA LABAU MAKARANTA', 728],
               ['HIZNA MAKARANTA, HIZNA', 608],
               ['UDDIBA G/DIKKO MAMBA', 667],
               ['KUSA DA   GARKAR MAGAJI, MARGAI', 497],
               ['MALIYON ALMU, MALIYO', 361],
               ['KAN-WURI MAIKULKI, FINLIN BARU', 652],
            ];
    }
}
