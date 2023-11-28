<?php namespace BO4E\Enum;

/** Abbildung verschiedener Zustände, die im Rahmen der Rechnungsbearbeitung durchlaufen werden. */

enum Rechnungsstatus {

	case UNGEPRUEFT;
	case GEPRUEFT_OK;
	case GEPRUEFT_FEHLERHAFT;
	case GEBUCHT;
	case BEZAHLT;

}
