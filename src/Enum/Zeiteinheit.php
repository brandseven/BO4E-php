<?php namespace BO4E\Enum;

/** Auflistung möglicher Einheiten zur Verwendung in zeitbezogenen Angaben. */

enum Zeiteinheit: string {

	case Zeiteinheit_0 = 'SEKUNDE';
	case Zeiteinheit_1 = 'MINUTE';
	case Zeiteinheit_2 = 'STUNDE';
	case Zeiteinheit_3 = 'VIERTEL_STUNDE';
	case Zeiteinheit_4 = 'TAG';
	case Zeiteinheit_5 = 'WOCHE';
	case Zeiteinheit_6 = 'MONAT';
	case Zeiteinheit_7 = 'QUARTAL';
	case Zeiteinheit_8 = 'HALBJAHR';
	case Zeiteinheit_9 = 'JAHR';

}
