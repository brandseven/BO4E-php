<?php namespace BO4E\Enum;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */

/** Auflistung möglicher abzurechnender Dienstleistungen. */

enum Dienstleistungstyp {

	case DATENBEREITSTELLUNG_TAEGLICH;
	case DATENBEREITSTELLUNG_WOECHENTLICH;
	case DATENBEREITSTELLUNG_MONATLICH;
	case DATENBEREITSTELLUNG_JAEHRLICH;
	case DATENBEREITSTELLUNG_HISTORISCHE_LG;
	case DATENBEREITSTELLUNG_STUENDLICH;
	case DATENBEREITSTELLUNG_VIERTELJAEHRLICH;
	case DATENBEREITSTELLUNG_HALBJAEHRLICH;
	case DATENBEREITSTELLUNG_MONATLICH_ZUSAETZLICH;
	case DATENBEREITSTELLUNG_EINMALIG;
	case AUSLESUNG_2X_TAEGLICH_FERNAUSLESUNG;
	case AUSLESUNG_TAEGLICH_FERNAUSLESUNG;
	case AUSLESUNG_MANUELL_MSB;
	case AUSLESUNG_MONATLICH_FERNAUSLESUNG;
	case AUSLESUNG_JAEHRLICH_FERNAUSLESUNG;
	case AUSLESUNG_MDE;
	case ABLESUNG_MONATLICH;
	case ABLESUNG_VIERTELJAEHRLICH;
	case ABLESUNG_HALBJAEHRLICH;
	case ABLESUNG_JAEHRLICH;
	case AUSLESUNG_FERNAUSLESUNG;
	case ABLESUNG_ZUSAETZLICH_MSB;
	case ABLESUNG_ZUSAETZLICH_KUNDE;
	case AUSLESUNG_FERNAUSLESUNG_ZUSAETZLICH_MSB;
	case AUSLESUNG_MOATLICH_FERNAUSLESUNG;
	case AUSLESUNG_STUENDLICH_FERNAUSLESUNG;
	case AUSLESUNG_TEMPERATURMENGENUMWERTER;
	case AUSLESUNG_ZUSTANDSMENGENUMWERTER;
	case AUSLESUNG_SYSTEMMENGENUMWERTER;
	case AUSLESUNG_VORGANG;
	case AUSLESUNG_KOMPAKTMENGENUMWERTER;
	case SPERRUNG;
	case ENTSPERRUNG;
	case MAHNKOSTEN;
	case INKASSOKOSTEN;

}
