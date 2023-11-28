<?php namespace BO4E\Enum;

/** Abbildung einer Statusinformation für Verträge. */

enum Vertragsstatus: string {

	case Vertragsstatus_0 = 'IN_ARBEIT';
	case Vertragsstatus_1 = 'UEBERMITTELT';
	case Vertragsstatus_2 = 'ANGENOMMEN';
	case Vertragsstatus_3 = 'AKTIV';
	case Vertragsstatus_4 = 'ABGELEHNT';
	case Vertragsstatus_5 = 'WIDERRUFEN';
	case Vertragsstatus_6 = 'STORNIERT';
	case Vertragsstatus_7 = 'GEKUENDIGT';
	case Vertragsstatus_8 = 'BEENDET';

}
