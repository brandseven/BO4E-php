<?php namespace BO4E\Enum;

/** Abbildung verschiedener Zustände, die im Rahmen der Rechnungsbearbeitung durchlaufen werden. */

enum Rechnungsstatus: string {

	case Rechnungsstatus_0 = 'UNGEPRUEFT';
	case Rechnungsstatus_1 = 'GEPRUEFT_OK';
	case Rechnungsstatus_2 = 'GEPRUEFT_FEHLERHAFT';
	case Rechnungsstatus_3 = 'GEBUCHT';
	case Rechnungsstatus_4 = 'BEZAHLT';

}
