<?php namespace BO4E\Enum;

/** Auflistung der Typen von Endkunden. Daraus kann das Verbrauchsprofil abgeleitet werden. */

enum Kundentyp {

	case GEWERBE;
	case PRIVAT;
	case LANDWIRT;
	case SONSTIGE;
	case HAUSHALT;
	case DIREKTHEIZUNG;
	case GEMEINSCHAFT_MFH;
	case KIRCHE;
	case KWK;
	case LADESAEULE;
	case BELEUCHTUNG_OEFFENTLICH;
	case BELEUCHTUNG_STRASSE;
	case SPEICHERHEIZUNG;
	case UNTERBR_EINRICHTUNG;
	case WAERMEPUMPE;

}
