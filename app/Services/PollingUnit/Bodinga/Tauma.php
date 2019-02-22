<?php
namespace App\Services\PollingUnit\Bodinga;

	class Tauma
	{

		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'PRY SCH, GIDAN BANGO',
				// 'PRY SCH, TAUMA',
				// 'SHIYAR HAUSAWA',
				// 'SH/MAKERA',
				// 'SHIYAR FILIN YAR ARI S/MODE',
				// 'SH/DANJERA P.S',
				// 'SH ANDI, SH/D/JEKA',
				// 'SHIYAR LIMAN, SH/FULANI',
				// 'SHIYAR KANTI, SH/BAREBARI',
				// 'ALI FODIO PRY. SCH. (SHIYAR SARKI)',
				// 'FILIN AISHA, SH/AISHA FILIN AISHA',
				// "POST OFFICE MAJEMA (SHIYAR MAJEMA)",
				// "NIZZAMIYA (RUNJIN KUDU D/FILI)",
				// 'PRY. SCH. LOW COST (LOW COST)',
				// "KWAKWARE (SHIYAR HAKIM /MARINA)"

				['PRY SCH, GIDAN BANGO', 893],
				['PRY SCH, TAUMA', 468],
				['SHIYAR HAUSAWA', 1,210],
				['SH/MAKERA', 868],
				['SHIYAR FILIN YAR ARI S/MODE', 572],
				['SH/DANJERA P.S', 636],
				['SH ANDI, SH/D/JEKA', 749],
				['SHIYAR LIMAN, SH/FULANI', 893],
				['SHIYAR KANTI, SH/BAREBARI', 450],
				['SHIYAR SARKI', 1080],
				['FILIN AISHA, SH/AISHA FILIN AISHA', 726],
				['SHIYAR MAJEMA', 755],
				['RUNJIN KUDU D/FILI', 989],
				['LOW COST', 1084],
				['SHIYAR HAKIMI/MARINA', 486]

			];
		}
	}
