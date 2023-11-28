<?php namespace BO4E\Enum;

/** Voraussetzungen, die erfüllt sein müssen, damit dieser Tarif zur Anwendung kommen kann. */

enum Voraussetzungen: string {

	case Voraussetzungen_0 = 'EINZUGSERMAECHTIGUNG';
	case Voraussetzungen_1 = 'ZEITPUNKT';
	case Voraussetzungen_2 = 'LIEFERANBINDUNG_EINE';
	case Voraussetzungen_3 = 'LIEFERANBINDUNG_ALLE';
	case Voraussetzungen_4 = 'GEWERBE';
	case Voraussetzungen_5 = 'LASTPROFIL';
	case Voraussetzungen_6 = 'ZAEHLERTYP_GROESSE';
	case Voraussetzungen_7 = 'AUSSCHLUSS_GROSSVERBRAUCHER';
	case Voraussetzungen_8 = 'NEUKUNDE';
	case Voraussetzungen_9 = 'BESTIMMTE_VERTRAGSFORMALITAETEN';
	case Voraussetzungen_10 = 'SELBSTABLESUNG';
	case Voraussetzungen_11 = 'ONLINEVORAUSSETZUNG';
	case Voraussetzungen_12 = 'MINDESTUMSATZ';
	case Voraussetzungen_13 = 'ZUSATZPRODUKT';
	case Voraussetzungen_14 = 'NEUKUNDE_MIT_VORAUSSETZUNGEN';
	case Voraussetzungen_15 = 'DIREKTVERTRIEB';
	case Voraussetzungen_16 = 'ANSCHLUSSART';
	case Voraussetzungen_17 = 'ANSCHLUSSWERT';
	case Voraussetzungen_18 = 'ALTER_KUNDENANLAGE';
	case Voraussetzungen_19 = 'ANLAGEBESCHAFFENHEIT';
	case Voraussetzungen_20 = 'BETRIEBSSTUNDENBEGRENZUNG';
	case Voraussetzungen_21 = 'FREIGABEZEITEN';
	case Voraussetzungen_22 = 'FAMILIENSTRUKTUR';
	case Voraussetzungen_23 = 'MITGLIEDSCHAFT';
	case Voraussetzungen_24 = 'STAATLICHE_FOERDERUNG';
	case Voraussetzungen_25 = 'BESONDERE_VERBRAUCHSSTELLE';
	case Voraussetzungen_26 = 'NIEDRIGENERGIE';
	case Voraussetzungen_27 = 'ORTSTEILE_LIEFERGEBIET';
	case Voraussetzungen_28 = 'WAERMEBEDARF_ERDGAS';
	case Voraussetzungen_29 = 'MAX_ZAEHLER_LIEFERSTELLEN';
	case Voraussetzungen_30 = 'LIEFERUNGSBESCHRAENKUNG_GASART';
	case Voraussetzungen_31 = 'KOMBI_BONI';
	case Voraussetzungen_32 = 'ALTVERTRAG';
	case Voraussetzungen_33 = 'VORGESCHRIEBENE_ZUSATZANLAGE';
	case Voraussetzungen_34 = 'MEHRERE_ZAEHLER_ABNAHMESTELLEN';
	case Voraussetzungen_35 = 'BESTIMMTER_ABNAHMEFALL';
	case Voraussetzungen_36 = 'ZUSATZMODALITAET';
	case Voraussetzungen_37 = 'NACHWEIS_ZAHLUNGSFAEHIGKEIT';
	case Voraussetzungen_38 = 'UMSTELLUNG_ENERGIEART';

}
