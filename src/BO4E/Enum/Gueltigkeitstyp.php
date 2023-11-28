<?php namespace BO4E\Enum;

/** Übersicht der verschiedenen Gültigkeiten zur Umsetzung von Positiv- bzw. Negativlisten. */

enum Gueltigkeitstyp: string {

	case Gueltigkeitstyp_0 = 'NUR_IN';
	case Gueltigkeitstyp_1 = 'NICHT_IN';
	case Gueltigkeitstyp_2 = 'NUR_IN_KOMBINATION_MIT';

}
