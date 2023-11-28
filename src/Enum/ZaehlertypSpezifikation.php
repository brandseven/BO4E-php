<?php namespace BO4E\Enum;

/** Bei diesem Enum handelt es sich um die Abbildung von besonderen Zählertyp-Spezifikationen der Sparten Strom und Gas. */

enum ZaehlertypSpezifikation: string {

	case ZaehlertypSpezifikation_0 = 'EDL40';
	case ZaehlertypSpezifikation_1 = 'EDL21';
	case ZaehlertypSpezifikation_2 = 'SONSTIGER_EHZ';
	case ZaehlertypSpezifikation_3 = 'MME_STANDARD';
	case ZaehlertypSpezifikation_4 = 'MME_MEDA';

}
