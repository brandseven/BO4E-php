<?php namespace BO4E\Enum;

/** Zur Abbildung von Messgrössen und zur Verwendung in energiewirtschaftlichen Berechnungen. */

enum Bemessungsgroesse {

	case WIRKARBEIT_EL;
	case LEISTUNG_EL;
	case BLINDARBEIT_KAP;
	case BLINDARBEIT_IND;
	case BLINDLEISTUNG_KAP;
	case BLINDLEISTUNG_IND;
	case WIRKARBEIT_TH;
	case LEISTUNG_TH;
	case VOLUMEN;
	case VOLUMENSTROM;
	case BENUTZUNGSDAUER;
	case ANZAHL;

}
