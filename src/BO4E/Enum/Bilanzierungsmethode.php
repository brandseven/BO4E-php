<?php namespace BO4E\Enum;

/** Mit dieser Aufzählung kann zwischen den Bilanzierungsmethoden bzw. -grundlagen unterschieden werden. */

enum Bilanzierungsmethode: string {

	case Bilanzierungsmethode_0 = 'RLM';
	case Bilanzierungsmethode_1 = 'SLP';
	case Bilanzierungsmethode_2 = 'TLP_GEMEINSAM';
	case Bilanzierungsmethode_3 = 'TLP_GETRENNT';
	case Bilanzierungsmethode_4 = 'PAUSCHAL';

}
