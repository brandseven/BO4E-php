<?php namespace BO4E\Enum;

/** Auflistung möglicher Einheiten zur Verwendung in zeitbezogenen Angaben. */

enum Zeiteinheit {

	case SEKUNDE;
	case MINUTE;
	case STUNDE;
	case VIERTEL_STUNDE;
	case TAG;
	case WOCHE;
	case MONAT;
	case QUARTAL;
	case HALBJAHR;
	case JAHR;

}
