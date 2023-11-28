<?php namespace BO4E\Enum;

/** Auflistung möglicher übergreifenden Geräteklassen. */

enum Geraeteklasse: string {

	case Geraeteklasse_0 = 'WANDLER';
	case Geraeteklasse_1 = 'KOMMUNIKATIONSEINRICHTUNG';
	case Geraeteklasse_2 = 'TECHNISCHE_STEUEREINRICHTUNG';
	case Geraeteklasse_3 = 'MENGENUMWERTER';
	case Geraeteklasse_4 = 'SMARTMETER_GATEWAY';
	case Geraeteklasse_5 = 'STEUERBOX';
	case Geraeteklasse_6 = 'ZAEHLEINRICHTUNG';

}
