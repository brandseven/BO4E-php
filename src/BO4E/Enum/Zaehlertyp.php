<?php namespace BO4E\Enum;

/** Bei diesem Enum handelt es sich um die Abbildung von Zählertypen der Sparten Strom und Gas. */

enum Zaehlertyp {

	case DREHSTROMZAEHLER;
	case BALGENGASZAEHLER;
	case DREHKOLBENZAEHLER;
	case LEISTUNGSZAEHLER;
	case MAXIMUMZAEHLER;
	case TURBINENRADGASZAEHLER;
	case ULTRASCHALLGASZAEHLER;
	case WECHSELSTROMZAEHLER;
	case MODERNE_MESSEINRICHTUNG;
	case INTELLIGENTES_MESSSYSTEM;
	case ELEKTRONISCHER_ZAEHLER;
	case WIRBELGASZAEHLER;

}
