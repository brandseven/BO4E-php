<?php namespace BO4E\Enum;

/** Aufzählung der Möglichkeiten für die Vergabe von Preisgarantien */

enum Preisgarantietyp {

	case ALLE_PREISBESTANDTEILE_BRUTTO;
	case ALLE_PREISBESTANDTEILE_NETTO;
	case PREISBESTANDTEILE_OHNE_ABGABEN;
	case NUR_ENERGIEPREIS;

}
