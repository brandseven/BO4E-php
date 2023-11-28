<?php namespace BO4E\Enum;

/** Abbildung verschiedener in der INVOIC angegebenen Rechnungstypen. */

enum NetznutzungRechnungstyp: string {

	case NetznutzungRechnungstyp_0 = 'ABSCHLUSSRECHNUNG';
	case NetznutzungRechnungstyp_1 = 'ABSCHLAGSRECHNUNG';
	case NetznutzungRechnungstyp_2 = 'TURNUSRECHNUNG';
	case NetznutzungRechnungstyp_3 = 'MONATSRECHNUNG';
	case NetznutzungRechnungstyp_4 = 'WIMRECHNUNG';
	case NetznutzungRechnungstyp_5 = 'ZWISCHENRECHNUNG';
	case NetznutzungRechnungstyp_6 = 'INTEGRIERTE_13TE_RECHNUNG';
	case NetznutzungRechnungstyp_7 = 'ZUSAETZLICHE_13TE_RECHNUNG';
	case NetznutzungRechnungstyp_8 = 'MEHRMINDERMENGENRECHNUNG';

}
