<?php namespace BO4E\Enum;

/** Angabe, wie eine Menge in Bezug auf einen Wert zu bilden ist. */

enum Mengenoperator: string {

	case Mengenoperator_0 = 'KLEINER_ALS';
	case Mengenoperator_1 = 'GROESSER_ALS';
	case Mengenoperator_2 = 'GLEICH';

}
