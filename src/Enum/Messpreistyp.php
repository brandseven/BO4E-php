<?php namespace BO4E\Enum;

/** Festlegung, welcher Typ von Messung mit einem Preis belegt wird */

enum Messpreistyp: string {

	case Messpreistyp_0 = 'MESSPREIS_G2_5';
	case Messpreistyp_1 = 'MESSPREIS_G4';
	case Messpreistyp_2 = 'MESSPREIS_G6';
	case Messpreistyp_3 = 'MESSPREIS_G10';
	case Messpreistyp_4 = 'MESSPREIS_G16';
	case Messpreistyp_5 = 'MESSPREIS_G25';
	case Messpreistyp_6 = 'MESSPREIS_G40';
	case Messpreistyp_7 = 'ELEKTRONISCHER_AUFSATZ';
	case Messpreistyp_8 = 'SMART_METER_MESSPREIS_G2_5';
	case Messpreistyp_9 = 'SMART_METER_MESSPREIS_G4';
	case Messpreistyp_10 = 'SMART_METER_MESSPREIS_G6';
	case Messpreistyp_11 = 'SMART_METER_MESSPREIS_G10';
	case Messpreistyp_12 = 'SMART_METER_MESSPREIS_G16';
	case Messpreistyp_13 = 'SMART_METER_MESSPREIS_G25';
	case Messpreistyp_14 = 'SMART_METER_MESSPREIS_G40';
	case Messpreistyp_15 = 'VERRECHNUNGSPREIS_ET_WECHSEL';
	case Messpreistyp_16 = 'VERRECHNUNGSPREIS_ET_DREH';
	case Messpreistyp_17 = 'VERRECHNUNGSPREIS_ZT_WECHSEL';
	case Messpreistyp_18 = 'VERRECHNUNGSPREIS_ZT_DREH';
	case Messpreistyp_19 = 'VERRECHNUNGSPREIS_L_ET';
	case Messpreistyp_20 = 'VERRECHNUNGSPREIS_L_ZT';
	case Messpreistyp_21 = 'VERRECHNUNGSPREIS_SM';
	case Messpreistyp_22 = 'AUFSCHLAG_WANDLER';
	case Messpreistyp_23 = 'AUFSCHLAG_TARIFSCHALTUNG';

}
