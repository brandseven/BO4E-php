<?php namespace BO4E\Enum;

/** Auflistung der Typen von Endkunden. Daraus kann das Verbrauchsprofil abgeleitet werden. */

enum Kundentyp: string {

	case Kundentyp_0 = 'GEWERBE';
	case Kundentyp_1 = 'PRIVAT';
	case Kundentyp_2 = 'LANDWIRT';
	case Kundentyp_3 = 'SONSTIGE';
	case Kundentyp_4 = 'HAUSHALT';
	case Kundentyp_5 = 'DIREKTHEIZUNG';
	case Kundentyp_6 = 'GEMEINSCHAFT_MFH';
	case Kundentyp_7 = 'KIRCHE';
	case Kundentyp_8 = 'KWK';
	case Kundentyp_9 = 'LADESAEULE';
	case Kundentyp_10 = 'BELEUCHTUNG_OEFFENTLICH';
	case Kundentyp_11 = 'BELEUCHTUNG_STRASSE';
	case Kundentyp_12 = 'SPEICHERHEIZUNG';
	case Kundentyp_13 = 'UNTERBR_EINRICHTUNG';
	case Kundentyp_14 = 'WAERMEPUMPE';

}
