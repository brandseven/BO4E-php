<?php namespace BO4E\Enum;

/** Auflistung möglicher Netzebenen innerhalb der Energiearten Strom und Gas. */

enum Netzebene {

	case NSP;
	case MSP;
	case HSP;
	case HSS;
	case MSP_NSP_UMSP;
	case HSP_MSP_UMSP;
	case HSS_HSP_UMSP;
	case HD;
	case MD;
	case ND;

}
