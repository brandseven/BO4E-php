<?php namespace BO4E\Enum;

/** Mit diesen Kriterien können regionale Bereiche definiert werden. */

enum Tarifregionskriterium {

	case NETZ_NUMMER;
	case POSTLEITZAHL;
	case ORT;
	case GRUNDVERSORGER_NUMMER;
	case REGION;

}
