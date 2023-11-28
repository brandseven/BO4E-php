<?php namespace BO4E\Enum;

/** Abbildung verschiedener Rechnungstypen zur Kennzeichnung von Rechnungen */

enum Rechnungstyp {

	case ENDKUNDENRECHNUNG;
	case NETZNUTZUNGSRECHNUNG;
	case MEHRMINDERMENGENRECHNUNG;
	case MESSSTELLENBETRIEBSRECHNUNG;
	case BESCHAFFUNGSRECHNUNG;
	case AUSGLEICHSENERGIERECHNUNG;

}
