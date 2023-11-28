<?php namespace BO4E\Enum;

/** Auflistung der Erzeugungsarten von Energie. */

enum Erzeugungsart {

	case FOSSIL;
	case KWK;
	case WIND;
	case SOLAR;
	case KERNKRAFT;
	case WASSER;
	case GEOTHERMIE;
	case BIOMASSE;
	case KOHLE;
	case GAS;
	case SONSTIGE;
	case SONSTIGE_EEG;
	case BIOGAS;
	case KLIMANEUTRALES_GAS;

}
