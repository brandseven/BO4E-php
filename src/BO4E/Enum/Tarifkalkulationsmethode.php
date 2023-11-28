<?php namespace BO4E\Enum;

/** Auflistung der verschiedenen Berechnungsmethoden für ein Preisblatt. */

enum Tarifkalkulationsmethode {

	case KEINE;
	case STAFFELN;
	case ZONEN;
	case BESTABRECHNUNG_STAFFEL;
	case PAKETPREIS;

}
