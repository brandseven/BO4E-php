<?php namespace BO4E\Enum;

/** Aufzählung der Möglichkeiten zur Rechnungslegung in Ausschreibungen. */

enum Rechnungslegung {

	case MONATSRECHN;
	case ABSCHL_MONATSRECHN;
	case ABSCHL_JAHRESRECHN;
	case MONATSRECHN_JAHRESRECHN;
	case VORKASSE;

}
