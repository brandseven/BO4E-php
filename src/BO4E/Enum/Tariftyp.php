<?php namespace BO4E\Enum;

/** Zur Differenzierung von Grund/Ersatzversorgungstarifen und sonstigen angebotenen Tarifen. */

enum Tariftyp: string {

	case Tariftyp_0 = 'GRUND_ERSATZVERSORGUNG';
	case Tariftyp_1 = 'GRUNDVERSORGUNG';
	case Tariftyp_2 = 'ERSATZVERSORGUNG';
	case Tariftyp_3 = 'SONDERTARIF';

}
