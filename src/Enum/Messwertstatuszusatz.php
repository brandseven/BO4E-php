<?php namespace BO4E\Enum;

/** Aufzählung von zusätzlichen Informationen zum Status, beispielsweise in Lastgängen oder Zählwerkständen. */

enum Messwertstatuszusatz: string {

	case Messwertstatuszusatz_0 = 'Z84_LEERSTAND';
	case Messwertstatuszusatz_1 = 'Z85_REALERZAEHLERUEBERLAUFGEPRUEFT';
	case Messwertstatuszusatz_2 = 'Z86_PLAUSIBELWGKONTROLLABLESUNG';
	case Messwertstatuszusatz_3 = 'Z87_PLAUSIBELWGKUNDENHINWEIS';
	case Messwertstatuszusatz_4 = 'ZC3_AUSTAUSCHDESERSATZWERTES';
	case Messwertstatuszusatz_5 = 'Z88_VERGLEICHSMESSUNG(GEEICHT)';
	case Messwertstatuszusatz_6 = 'Z89_VERGLEICHSMESSUNG(NICHTGEEICHT)';
	case Messwertstatuszusatz_7 = 'Z90_MESSWERTNACHBILDUNGAUSGEEICHTENWERTEN';
	case Messwertstatuszusatz_8 = 'Z91_MESSWERTNACHBILDUNGAUSNICHTGEEICHTENWERTEN';
	case Messwertstatuszusatz_9 = 'Z92_INTERPOLATION';
	case Messwertstatuszusatz_10 = 'Z93_HALTEWERT';
	case Messwertstatuszusatz_11 = 'Z94_BILANZIERUNGNETZABSCHNITT';
	case Messwertstatuszusatz_12 = 'Z95_HISTORISCHEMESSWERTE';
	case Messwertstatuszusatz_13 = 'ZJ2_STATISTISCHEMETHODE';
	case Messwertstatuszusatz_14 = 'Z74_KEINZUGANG';
	case Messwertstatuszusatz_15 = 'Z75_KOMMUNIKATIONSSTOERUNG';
	case Messwertstatuszusatz_16 = 'Z76_NETZAUSFALL';
	case Messwertstatuszusatz_17 = 'Z77_SPANNUNGSAUSFALL';
	case Messwertstatuszusatz_18 = 'Z78_GERAETEWECHSEL';
	case Messwertstatuszusatz_19 = 'Z79_KALIBRIERUNG';
	case Messwertstatuszusatz_20 = 'Z80_GERAETARBEITETAUSSERHALBDERBETRIEBSBEDINGUNGEN';
	case Messwertstatuszusatz_21 = 'Z81_MESSEINRICHTUNGGESTOERT_DEFEKT';
	case Messwertstatuszusatz_22 = 'Z82_UNSICHERHEITMESSUNG';
	case Messwertstatuszusatz_23 = 'Z98_BERUECKSICHTIGUNGSTOERMENGENZAEHLWERK';
	case Messwertstatuszusatz_24 = 'Z99_MENGENUMWERTUNGUNVOLLSTAENDIG';
	case Messwertstatuszusatz_25 = 'ZA0_UHRZEITGESTELLT_SYNCHRONISATION';
	case Messwertstatuszusatz_26 = 'ZA1_MESSWERTUNPLAUSIBEL';
	case Messwertstatuszusatz_27 = 'ZC2_TARIFSCHALTGERAETDEFEKT';
	case Messwertstatuszusatz_28 = 'ZC4_IMPULSWERTIGKEITNICHTAUSREICHEND';
	case Messwertstatuszusatz_29 = 'ZA3_FALSCHERWANDLERFAKTOR';
	case Messwertstatuszusatz_30 = 'ZA4_FEHLERHAFTEABLESUNG';
	case Messwertstatuszusatz_31 = 'ZA5_AENDERUNGDERBERECHNUNG';
	case Messwertstatuszusatz_32 = 'ZA6_UMBAUDERMESSLOKATION';
	case Messwertstatuszusatz_33 = 'ZA7_DATENBEARBEITUNGSFEHLER';
	case Messwertstatuszusatz_34 = 'ZA8_BRENNWERTKORREKTUR';
	case Messwertstatuszusatz_35 = 'ZA9_Z-ZAHL-KORREKTUR';
	case Messwertstatuszusatz_36 = 'ZB0_STOERUNG_DEFEKTMESSEINRICHTUNG';
	case Messwertstatuszusatz_37 = 'ZB9_AENDERUNGTARIFSCHALTZEITEN';
	case Messwertstatuszusatz_38 = 'ZG3_UMSTELLUNGGASQUALITAET';

}
