<?php namespace BO4E\Enum;

/** Auflistung der verschiedenen Berechnungsmethoden für ein Preisblatt. */

enum Kalkulationsmethode: string {

	case Kalkulationsmethode_0 = 'STUFEN';
	case Kalkulationsmethode_1 = 'ZONEN';
	case Kalkulationsmethode_2 = 'VORZONEN_GP';
	case Kalkulationsmethode_3 = 'SIGMOID';
	case Kalkulationsmethode_4 = 'BLINDARBEIT_GT_50_PROZENT';
	case Kalkulationsmethode_5 = 'BLINDARBEIT_GT_40_PROZENT';
	case Kalkulationsmethode_6 = 'BLINDARBEIT_MIT_FREIMENGE';
	case Kalkulationsmethode_7 = 'AP_GP_ZONEN';
	case Kalkulationsmethode_8 = 'LP_INSTALL_LEISTUNG';
	case Kalkulationsmethode_9 = 'AP_TRANSPORT_ODER_VERTEILNETZ';
	case Kalkulationsmethode_10 = 'AP_TRANSPORT_ODER_VERTEILNETZ_ORTSVERTEILNETZ_SIGMOID';
	case Kalkulationsmethode_11 = 'LP_JAHRESVERBRAUCH';
	case Kalkulationsmethode_12 = 'LP_TRANSPORT_ODER_VERTEILNETZ';
	case Kalkulationsmethode_13 = 'LP_TRANSPORT_ODER_VERTEILNETZ_ORTSVERTEILNETZ_SIGMOID';
	case Kalkulationsmethode_14 = 'FUNKTIONEN';
	case Kalkulationsmethode_15 = 'VERBRAUCH_UEBER_SLP_GRENZE_FUNKTIONSBEZOGEN_WEITERE_BERECHNUNG_ALS_LGK';

}
