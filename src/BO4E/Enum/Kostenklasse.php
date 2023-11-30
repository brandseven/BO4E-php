<?php namespace BO4E\Enum;

/** DO NOT CHANGE THIS FILE - GENERATOR WILL OVERWRITE THIS FILE */

/** Kostenklassen bilden die oberste Ebene der verschiedenen Kosten.
In der Regel werden die Gesamtkosten einer Kostenklasse in einer App berechnet. */

enum Kostenklasse {

	case FREMDKOSTEN;
	case BESCHAFFUNG;
	case SELBSTKOSTEN;
	case MARGEN;
	case ENERGIEVERSORGUNGSKOSTEN;

}
