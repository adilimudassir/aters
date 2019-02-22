<?php
namespace App\Services\PollingUnit\DangeShuni;
	
	class Tuntube
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				// 'HEALTH CLINIC KWANAWA (KWANAWA BAKIN TIT)',
				// 'G.H KWANAWA',
				// 'DAMBUWA PRY SCH.',
				// 'DAMBUWA PRIMARY SCHOOL (DAMBUWA G. HAKIMI)',
				// 'GIDAN BAIDU PRIMARY SCHOOL GIDAN BAIDU (GIDAN BAIDU KAN HANYA)',
				// 'GONAR ADAMU, GONAR ADAMU',
				// 'TUDUN MAITANDU PRY SCH',
				// 'TSEHE PRY SCH.',
				// 'GAREJIN GUMBULU/ PRIMARY SCHOOL GUMBULU (GAREJIN GUMBULU)',
				// 'TUNTUBE PRY SCH.',
				// 'RUGGAR DUTSI PRI. SCH',
				// 'TUNDUNBE/ PRIMARY SCHOOL TUNTUBE (TUNTUBE GARKAN HAKIMI)',
				// 'RUGGAR GIWA PRI. SCH',
				// 'TUDUN DANJEKA PRIMARY SCHOOL',
				// 'LUGGA TSARA PRI. SCH',
				// 'HEALTH CLINIC KWANAWA (LITTIGAWO GAINO)',
				// 'LITTIGAWO/ KWANAWA (LITTIGAWO BAKIN TITI)',
				// 'ARMY C.M.P.S, ARMY C.M.P.S I',
				// 'ARMY C.M.P.S, ARMY C.M.P.S II',
				// 'ARMY C.M.P.S, ARMY C.M.P.S III',
				// 'ARMY C.M.P.S, ARMY C.M.P.S IV',
				// 'ARMY C.M.P.S, ARMY C.M.P.S V',
				// 'OFFA ROAD'
				['KWANAWA', 643],
				['G.H KWANAWA', 301],
				['DAMBUWA PRY SCH.', 1,770],
				['G.H DAMBUWA', 1,146],
				['GIDAN BAIDU', 658],
				['GONAR ADAMU, GONAR ADAMU', 529],
				['TUDUN MAITANDU PRY SCH', 729],
				['TSEHE PRY SCH.', 507],
				['GAREJIN GUMBULU',823],
				['TUNTUBE PRY SCH.', 632],
				['RUGGAR DUTSI PRI. SCH', 553],
				['TUNTUBE GARKAR HAKIMI', 364],
				['RUGGAR GIWA PRI. SCH', 429],
				['TUDUN DANJEKA PRIMARY SCHOOL', 464],
				['LUGGA TSARA PRI. SCH', 570],
				['LITTIGAWO, LITTIGAWO', 1019],
				['LITTIGAWO B. TITI', 810],
				['ARMY C.M.P.S, ARMY C.M.P.S I',777],
				['ARMY C.M.P.S, ARMY C.M.P.S II',1,051],
				[ 'ARMY C.M.P.S, ARMY C.M.P.S III',1,066],
				[ 'ARMY C.M.P.S, ARMY C.M.P.S IV',895],
				[ 'ARMY C.M.P.S, ARMY C.M.P.S V',730],
				[ 'OFFA ROAD',932]
			];
		}
	}