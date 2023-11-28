<?php namespace BO4E\Enum;

/** Unterscheidungsmöglichkeiten für die Sparte. */

enum Sparte: string {

	case Sparte_0 = 'STROM';
	case Sparte_1 = 'GAS';
	case Sparte_2 = 'FERNWAERME';
	case Sparte_3 = 'NAHWAERME';
	case Sparte_4 = 'WASSER';
	case Sparte_5 = 'ABWASSER';
	case Sparte_6 = 'STROM_UND_GAS';

}
