<?php namespace BO4E\Enum;

/** Aufschlüsselung der Preistypen in Tarifen. */

enum Preistyp: string {

	case Preistyp_0 = 'GRUNDPREIS';
	case Preistyp_1 = 'ARBEITSPREIS_EINTARIF';
	case Preistyp_2 = 'ARBEITSPREIS_HT';
	case Preistyp_3 = 'ARBEITSPREIS_NT';
	case Preistyp_4 = 'LEISTUNGSPREIS';
	case Preistyp_5 = 'MESSPREIS';
	case Preistyp_6 = 'ENTGELT_ABLESUNG';
	case Preistyp_7 = 'ENTGELT_ABRECHNUNG';
	case Preistyp_8 = 'ENTGELT_MSB';
	case Preistyp_9 = 'PROVISION';

}
