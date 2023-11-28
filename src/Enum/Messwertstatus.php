<?php namespace BO4E\Enum;

/** Der Status eines Zählerstandes */

enum Messwertstatus: string {

	case Messwertstatus_0 = 'ABGELESEN';
	case Messwertstatus_1 = 'ERSATZWERT';
	case Messwertstatus_2 = 'VORSCHLAGSWERT';
	case Messwertstatus_3 = 'NICHT_VERWENDBAR';
	case Messwertstatus_4 = 'PROGNOSEWERT';
	case Messwertstatus_5 = 'VORLAEUFIGERWERT';
	case Messwertstatus_6 = 'ENERGIEMENGESUMMIERT';
	case Messwertstatus_7 = 'FEHLT';

}
