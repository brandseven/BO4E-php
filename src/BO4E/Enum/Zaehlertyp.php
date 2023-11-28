<?php namespace BO4E\Enum;

/** Bei diesem Enum handelt es sich um die Abbildung von Zählertypen der Sparten Strom und Gas. */

enum Zaehlertyp: string {

	case Zaehlertyp_0 = 'DREHSTROMZAEHLER';
	case Zaehlertyp_1 = 'BALGENGASZAEHLER';
	case Zaehlertyp_2 = 'DREHKOLBENZAEHLER';
	case Zaehlertyp_3 = 'LEISTUNGSZAEHLER';
	case Zaehlertyp_4 = 'MAXIMUMZAEHLER';
	case Zaehlertyp_5 = 'TURBINENRADGASZAEHLER';
	case Zaehlertyp_6 = 'ULTRASCHALLGASZAEHLER';
	case Zaehlertyp_7 = 'WECHSELSTROMZAEHLER';
	case Zaehlertyp_8 = 'MODERNE_MESSEINRICHTUNG';
	case Zaehlertyp_9 = 'INTELLIGENTES_MESSSYSTEM';
	case Zaehlertyp_10 = 'ELEKTRONISCHER_ZAEHLER';
	case Zaehlertyp_11 = 'WIRBELGASZAEHLER';

}
