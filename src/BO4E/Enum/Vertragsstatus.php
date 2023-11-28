<?php namespace BO4E\Enum;

/** Abbildung einer Statusinformation für Verträge. */

enum Vertragsstatus {

	case IN_ARBEIT;
	case UEBERMITTELT;
	case ANGENOMMEN;
	case AKTIV;
	case ABGELEHNT;
	case WIDERRUFEN;
	case STORNIERT;
	case GEKUENDIGT;
	case BEENDET;

}
