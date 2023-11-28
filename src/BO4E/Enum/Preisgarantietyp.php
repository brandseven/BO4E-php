<?php namespace BO4E\Enum;

/** Aufzählung der Möglichkeiten für die Vergabe von Preisgarantien */

enum Preisgarantietyp: string {

	case Preisgarantietyp_0 = 'ALLE_PREISBESTANDTEILE_BRUTTO';
	case Preisgarantietyp_1 = 'ALLE_PREISBESTANDTEILE_NETTO';
	case Preisgarantietyp_2 = 'PREISBESTANDTEILE_OHNE_ABGABEN';
	case Preisgarantietyp_3 = 'NUR_ENERGIEPREIS';

}
