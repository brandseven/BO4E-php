<?php namespace BO4E\Enum;

/** Gibt den Status eines Angebotes an. */

enum Angebotsstatus {

	case KONZEPTION;
	case UNVERBINDLICH;
	case VERBINDLICH;
	case BEAUFTRAGT;
	case UNGUELTIG;
	case ABGELEHNT;
	case NACHGEFASST;
	case AUSSTEHEND;
	case ERLEDIGT;

}
