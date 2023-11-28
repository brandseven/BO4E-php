<?php namespace BO4E\Enum;

/** Art des Kontaktes zwischen Geschäftspartnern. */

enum Kontaktart: string {

	case Kontaktart_0 = 'ANSCHREIBEN';
	case Kontaktart_1 = 'TELEFONAT';
	case Kontaktart_2 = 'FAX';
	case Kontaktart_3 = 'E_MAIL';
	case Kontaktart_4 = 'SMS';

}
