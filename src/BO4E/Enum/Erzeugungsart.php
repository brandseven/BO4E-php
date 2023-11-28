<?php namespace BO4E\Enum;

/** Auflistung der Erzeugungsarten von Energie. */

enum Erzeugungsart: string {

	case Erzeugungsart_0 = 'FOSSIL';
	case Erzeugungsart_1 = 'KWK';
	case Erzeugungsart_2 = 'WIND';
	case Erzeugungsart_3 = 'SOLAR';
	case Erzeugungsart_4 = 'KERNKRAFT';
	case Erzeugungsart_5 = 'WASSER';
	case Erzeugungsart_6 = 'GEOTHERMIE';
	case Erzeugungsart_7 = 'BIOMASSE';
	case Erzeugungsart_8 = 'KOHLE';
	case Erzeugungsart_9 = 'GAS';
	case Erzeugungsart_10 = 'SONSTIGE';
	case Erzeugungsart_11 = 'SONSTIGE_EEG';
	case Erzeugungsart_12 = 'BIOGAS';
	case Erzeugungsart_13 = 'KLIMANEUTRALES_GAS';

}
