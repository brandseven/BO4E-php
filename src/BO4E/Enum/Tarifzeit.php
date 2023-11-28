<?php namespace BO4E\Enum;

/** Zur Kennzeichnung verschiedener Tarifzeiten, beispielsweise zur Bepreisung oder zur Verbrauchsermittlung. */

enum Tarifzeit: string {

	case Tarifzeit_0 = 'TZ_STANDARD';
	case Tarifzeit_1 = 'TZ_HT';
	case Tarifzeit_2 = 'TZ_NT';

}
