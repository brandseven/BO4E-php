<?php namespace BO4E\Enum;

/** Der Status eines Zählerstandes */

enum Messwertstatus {

	case ABGELESEN;
	case ERSATZWERT;
	case VORSCHLAGSWERT;
	case NICHT_VERWENDBAR;
	case PROGNOSEWERT;
	case VORLAEUFIGERWERT;
	case ENERGIEMENGESUMMIERT;
	case FEHLT;

}
