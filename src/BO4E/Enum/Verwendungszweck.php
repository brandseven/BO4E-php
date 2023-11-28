<?php namespace BO4E\Enum;

/** Verwendungszweck der Werte Marktlokation */

enum Verwendungszweck: string {

	case Verwendungszweck_0 = 'NETZNUTZUNGSABRECHNUNG';
	case Verwendungszweck_1 = 'BILANZKREISABRECHNUNG';
	case Verwendungszweck_2 = 'MEHRMINDERMENGENABRECHNUNG';
	case Verwendungszweck_3 = 'ENDKUNDENABRECHNUNG';
	case Verwendungszweck_4 = 'UEBERMITTLUNG_AN_DAS_HKNR';
	case Verwendungszweck_5 = 'ERMITTLUNG_AUSGEGLICHENHEIT_BILANZKREIS';

}
