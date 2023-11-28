<?php namespace BO4E\Enum;

/** Abbildung verschiedener in der INVOIC angegebenen Rechnungstypen. */

enum NetznutzungRechnungstyp {

	case ABSCHLUSSRECHNUNG;
	case ABSCHLAGSRECHNUNG;
	case TURNUSRECHNUNG;
	case MONATSRECHNUNG;
	case WIMRECHNUNG;
	case ZWISCHENRECHNUNG;
	case INTEGRIERTE_13TE_RECHNUNG;
	case ZUSAETZLICHE_13TE_RECHNUNG;
	case MEHRMINDERMENGENRECHNUNG;

}
