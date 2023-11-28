<?php namespace BO4E\Enum;

/** Zur Abbildung von Messgrössen und zur Verwendung in energiewirtschaftlichen Berechnungen. */

enum Bemessungsgroesse: string {

	case Bemessungsgroesse_0 = 'WIRKARBEIT_EL';
	case Bemessungsgroesse_1 = 'LEISTUNG_EL';
	case Bemessungsgroesse_2 = 'BLINDARBEIT_KAP';
	case Bemessungsgroesse_3 = 'BLINDARBEIT_IND';
	case Bemessungsgroesse_4 = 'BLINDLEISTUNG_KAP';
	case Bemessungsgroesse_5 = 'BLINDLEISTUNG_IND';
	case Bemessungsgroesse_6 = 'WIRKARBEIT_TH';
	case Bemessungsgroesse_7 = 'LEISTUNG_TH';
	case Bemessungsgroesse_8 = 'VOLUMEN';
	case Bemessungsgroesse_9 = 'VOLUMENSTROM';
	case Bemessungsgroesse_10 = 'BENUTZUNGSDAUER';
	case Bemessungsgroesse_11 = 'ANZAHL';

}
