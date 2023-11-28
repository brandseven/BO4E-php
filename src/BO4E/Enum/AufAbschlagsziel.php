<?php namespace BO4E\Enum;

/** Der Preis, auf den sich ein Auf- oder Abschlag bezieht. */

enum AufAbschlagsziel: string {

	case AufAbschlagsziel_0 = 'ARBEITSPREIS_EINTARIF';
	case AufAbschlagsziel_1 = 'ARBEITSPREIS_HT';
	case AufAbschlagsziel_2 = 'ARBEITSPREIS_NT';
	case AufAbschlagsziel_3 = 'ARBEITSPREIS_HT_NT';
	case AufAbschlagsziel_4 = 'GRUNDPREIS';
	case AufAbschlagsziel_5 = 'GESAMTPREIS';

}
