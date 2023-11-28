<?php namespace BO4E\Enum;

/** Auflistung möglicher abzurechnender Dienstleistungen. */

enum Dienstleistungstyp: string {

	case Dienstleistungstyp_0 = 'DATENBEREITSTELLUNG_TAEGLICH';
	case Dienstleistungstyp_1 = 'DATENBEREITSTELLUNG_WOECHENTLICH';
	case Dienstleistungstyp_2 = 'DATENBEREITSTELLUNG_MONATLICH';
	case Dienstleistungstyp_3 = 'DATENBEREITSTELLUNG_JAEHRLICH';
	case Dienstleistungstyp_4 = 'DATENBEREITSTELLUNG_HISTORISCHE_LG';
	case Dienstleistungstyp_5 = 'DATENBEREITSTELLUNG_STUENDLICH';
	case Dienstleistungstyp_6 = 'DATENBEREITSTELLUNG_VIERTELJAEHRLICH';
	case Dienstleistungstyp_7 = 'DATENBEREITSTELLUNG_HALBJAEHRLICH';
	case Dienstleistungstyp_8 = 'DATENBEREITSTELLUNG_MONATLICH_ZUSAETZLICH';
	case Dienstleistungstyp_9 = 'DATENBEREITSTELLUNG_EINMALIG';
	case Dienstleistungstyp_10 = 'AUSLESUNG_2X_TAEGLICH_FERNAUSLESUNG';
	case Dienstleistungstyp_11 = 'AUSLESUNG_TAEGLICH_FERNAUSLESUNG';
	case Dienstleistungstyp_12 = 'AUSLESUNG_MANUELL_MSB';
	case Dienstleistungstyp_13 = 'AUSLESUNG_MONATLICH_FERNAUSLESUNG';
	case Dienstleistungstyp_14 = 'AUSLESUNG_JAEHRLICH_FERNAUSLESUNG';
	case Dienstleistungstyp_15 = 'AUSLESUNG_MDE';
	case Dienstleistungstyp_16 = 'ABLESUNG_MONATLICH';
	case Dienstleistungstyp_17 = 'ABLESUNG_VIERTELJAEHRLICH';
	case Dienstleistungstyp_18 = 'ABLESUNG_HALBJAEHRLICH';
	case Dienstleistungstyp_19 = 'ABLESUNG_JAEHRLICH';
	case Dienstleistungstyp_20 = 'AUSLESUNG_FERNAUSLESUNG';
	case Dienstleistungstyp_21 = 'ABLESUNG_ZUSAETZLICH_MSB';
	case Dienstleistungstyp_22 = 'ABLESUNG_ZUSAETZLICH_KUNDE';
	case Dienstleistungstyp_23 = 'AUSLESUNG_FERNAUSLESUNG_ZUSAETZLICH_MSB';
	case Dienstleistungstyp_24 = 'AUSLESUNG_MOATLICH_FERNAUSLESUNG';
	case Dienstleistungstyp_25 = 'AUSLESUNG_STUENDLICH_FERNAUSLESUNG';
	case Dienstleistungstyp_26 = 'AUSLESUNG_TEMPERATURMENGENUMWERTER';
	case Dienstleistungstyp_27 = 'AUSLESUNG_ZUSTANDSMENGENUMWERTER';
	case Dienstleistungstyp_28 = 'AUSLESUNG_SYSTEMMENGENUMWERTER';
	case Dienstleistungstyp_29 = 'AUSLESUNG_VORGANG';
	case Dienstleistungstyp_30 = 'AUSLESUNG_KOMPAKTMENGENUMWERTER';
	case Dienstleistungstyp_31 = 'SPERRUNG';
	case Dienstleistungstyp_32 = 'ENTSPERRUNG';
	case Dienstleistungstyp_33 = 'MAHNKOSTEN';
	case Dienstleistungstyp_34 = 'INKASSOKOSTEN';

}
