<?php namespace BO4E\Enum;

/** Abbildung verschiedener Rufnummerntypen. */

enum Rufnummernart: string {

	case Rufnummernart_0 = 'RUF_ZENTRALE';
	case Rufnummernart_1 = 'FAX_ZENTRALE';
	case Rufnummernart_2 = 'SAMMELRUF';
	case Rufnummernart_3 = 'SAMMELFAX';
	case Rufnummernart_4 = 'ABTEILUNGRUF';
	case Rufnummernart_5 = 'ABTEILUNGFAX';
	case Rufnummernart_6 = 'RUF_DURCHWAHL';
	case Rufnummernart_7 = 'FAX_DURCHWAHL';
	case Rufnummernart_8 = 'MOBIL_NUMMER';

}
