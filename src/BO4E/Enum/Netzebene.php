<?php namespace BO4E\Enum;

/** Auflistung möglicher Netzebenen innerhalb der Energiearten Strom und Gas. */

enum Netzebene: string {

	case Netzebene_0 = 'NSP';
	case Netzebene_1 = 'MSP';
	case Netzebene_2 = 'HSP';
	case Netzebene_3 = 'HSS';
	case Netzebene_4 = 'MSP_NSP_UMSP';
	case Netzebene_5 = 'HSP_MSP_UMSP';
	case Netzebene_6 = 'HSS_HSP_UMSP';
	case Netzebene_7 = 'HD';
	case Netzebene_8 = 'MD';
	case Netzebene_9 = 'ND';

}
