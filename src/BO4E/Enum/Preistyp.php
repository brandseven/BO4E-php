<?php namespace BO4E\Enum;

/** Aufschlüsselung der Preistypen in Tarifen. */

enum Preistyp {

	case GRUNDPREIS;
	case ARBEITSPREIS_EINTARIF;
	case ARBEITSPREIS_HT;
	case ARBEITSPREIS_NT;
	case LEISTUNGSPREIS;
	case MESSPREIS;
	case ENTGELT_ABLESUNG;
	case ENTGELT_ABRECHNUNG;
	case ENTGELT_MSB;
	case PROVISION;

}
