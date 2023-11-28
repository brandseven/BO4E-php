<?php namespace BO4E\Enum;

/** Eine Aufzählung zur Einordnung für die Höhe der Konzessionsabgabe. */

enum KundengruppeKA: string {

	case KundengruppeKA_0 = 'S_SCHWACHLAST';
	case KundengruppeKA_1 = 'S_TARIF_25000';
	case KundengruppeKA_2 = 'S_TARIF_100000';
	case KundengruppeKA_3 = 'S_TARIF_500000';
	case KundengruppeKA_4 = 'S_TARIF_G_500000';
	case KundengruppeKA_5 = 'S_SONDERKUNDE';
	case KundengruppeKA_6 = 'G_KOWA_25000';
	case KundengruppeKA_7 = 'G_KOWA_100000';
	case KundengruppeKA_8 = 'G_KOWA_500000';
	case KundengruppeKA_9 = 'G_KOWA_G_500000';
	case KundengruppeKA_10 = 'G_TARIF_25000';
	case KundengruppeKA_11 = 'G_TARIF_100000';
	case KundengruppeKA_12 = 'G_TARIF_500000';
	case KundengruppeKA_13 = 'G_TARIF_G_500000';
	case KundengruppeKA_14 = 'G_SONDERKUNDE';
	case KundengruppeKA_15 = 'SONDER_KAS';
	case KundengruppeKA_16 = 'SONDER_SAS';
	case KundengruppeKA_17 = 'SONDER_TAS';
	case KundengruppeKA_18 = 'SONDER_TKS';
	case KundengruppeKA_19 = 'SONDER_TSS';

}
