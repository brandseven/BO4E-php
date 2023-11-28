<?php namespace BO4E\Enum;

/** Aufzählung der Möglichkeiten zur Rechnungslegung in Ausschreibungen. */

enum Rechnungslegung: string {

	case Rechnungslegung_0 = 'MONATSRECHN';
	case Rechnungslegung_1 = 'ABSCHL_MONATSRECHN';
	case Rechnungslegung_2 = 'ABSCHL_JAHRESRECHN';
	case Rechnungslegung_3 = 'MONATSRECHN_JAHRESRECHN';
	case Rechnungslegung_4 = 'VORKASSE';

}
