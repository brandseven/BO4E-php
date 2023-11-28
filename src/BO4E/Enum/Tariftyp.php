<?php namespace BO4E\Enum;

/** Zur Differenzierung von Grund/Ersatzversorgungstarifen und sonstigen angebotenen Tarifen. */

enum Tariftyp {

	case GRUND_ERSATZVERSORGUNG;
	case GRUNDVERSORGUNG;
	case ERSATZVERSORGUNG;
	case SONDERTARIF;

}
