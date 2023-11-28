<?php namespace BO4E\Enum;

/** Mit diesen Kriterien können regionale Bereiche definiert werden. */

enum Tarifregionskriterium: string {

	case Tarifregionskriterium_0 = 'NETZ_NUMMER';
	case Tarifregionskriterium_1 = 'POSTLEITZAHL';
	case Tarifregionskriterium_2 = 'ORT';
	case Tarifregionskriterium_3 = 'GRUNDVERSORGER_NUMMER';
	case Tarifregionskriterium_4 = 'REGION';

}
