<?php namespace BO4E\Enum;

/** Der Preis, auf den sich ein Auf- oder Abschlag bezieht. */

enum AufAbschlagsziel {

	case ARBEITSPREIS_EINTARIF;
	case ARBEITSPREIS_HT;
	case ARBEITSPREIS_NT;
	case ARBEITSPREIS_HT_NT;
	case GRUNDPREIS;
	case GESAMTPREIS;

}
