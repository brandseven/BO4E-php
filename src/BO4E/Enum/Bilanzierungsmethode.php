<?php namespace BO4E\Enum;

/** Mit dieser Aufzählung kann zwischen den Bilanzierungsmethoden bzw. -grundlagen unterschieden werden. */

enum Bilanzierungsmethode {

	case RLM;
	case SLP;
	case TLP_GEMEINSAM;
	case TLP_GETRENNT;
	case PAUSCHAL;

}
