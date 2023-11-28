<?php namespace BO4E\Enum;

/** Auflistung der verschiedenen Berechnungsmethoden für ein Preisblatt. */

enum Tarifkalkulationsmethode: string {

	case Tarifkalkulationsmethode_0 = 'KEINE';
	case Tarifkalkulationsmethode_1 = 'STAFFELN';
	case Tarifkalkulationsmethode_2 = 'ZONEN';
	case Tarifkalkulationsmethode_3 = 'BESTABRECHNUNG_STAFFEL';
	case Tarifkalkulationsmethode_4 = 'PAKETPREIS';

}
