<?php namespace BO4E\Enum;

/** Zur Kennzeichnung verschiedener Steuersätze und Verfahren. */

enum Steuerkennzeichen: string {

	case Steuerkennzeichen_0 = 'UST_0';
	case Steuerkennzeichen_1 = 'UST_19';
	case Steuerkennzeichen_2 = 'UST_16';
	case Steuerkennzeichen_3 = 'UST_7';
	case Steuerkennzeichen_4 = 'VST_0';
	case Steuerkennzeichen_5 = 'VST_19';
	case Steuerkennzeichen_6 = 'VST_7';
	case Steuerkennzeichen_7 = 'RCV';

}
