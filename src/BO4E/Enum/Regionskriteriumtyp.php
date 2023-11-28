<?php namespace BO4E\Enum;

/** Klassifizierung der Kriterien für eine regionale Eingrenzung. */

enum Regionskriteriumtyp: string {

	case Regionskriteriumtyp_0 = 'BUNDESLANDKENNZIFFER';
	case Regionskriteriumtyp_1 = 'BUNDESLAND_NAME';
	case Regionskriteriumtyp_2 = 'MARKTGEBIET_NUMMER';
	case Regionskriteriumtyp_3 = 'MARKTGEBIET_NAME';
	case Regionskriteriumtyp_4 = 'REGELGEBIET_NUMMER';
	case Regionskriteriumtyp_5 = 'REGELGEBIET_NAME';
	case Regionskriteriumtyp_6 = 'NETZ_STROM';
	case Regionskriteriumtyp_7 = 'NETZ_GAS';
	case Regionskriteriumtyp_8 = 'NETZBETREIBER_NUMMER_STROM';
	case Regionskriteriumtyp_9 = 'NETZBETREIBER_NUMMER_GAS';
	case Regionskriteriumtyp_10 = 'NETZBETREIBER_NAME_STROM';
	case Regionskriteriumtyp_11 = 'NETZBETREIBER_NAME_GAS';
	case Regionskriteriumtyp_12 = 'BILANZIERUNGS_GEBIET_NUMMER';
	case Regionskriteriumtyp_13 = 'MSB_NUMMER';
	case Regionskriteriumtyp_14 = 'MSB_NAME';
	case Regionskriteriumtyp_15 = 'VERSORGER_NUMMER';
	case Regionskriteriumtyp_16 = 'VERSORGER_NAME';
	case Regionskriteriumtyp_17 = 'GRUNDVERSORGER_NUMMER_STROM';
	case Regionskriteriumtyp_18 = 'GRUNDVERSORGER_NAME_STROM';
	case Regionskriteriumtyp_19 = 'GRUNDVERSORGER_NUMMER_GAS';
	case Regionskriteriumtyp_20 = 'GRUNDVERSORGER_NAME_GAS';
	case Regionskriteriumtyp_21 = 'KREIS_NAME';
	case Regionskriteriumtyp_22 = 'KREISKENNZIFFER';
	case Regionskriteriumtyp_23 = 'GEMEINDE_NAME';
	case Regionskriteriumtyp_24 = 'GEMEINDEKENNZIFFER';
	case Regionskriteriumtyp_25 = 'POSTLEITZAHL';
	case Regionskriteriumtyp_26 = 'ORT';
	case Regionskriteriumtyp_27 = 'POSTORT';
	case Regionskriteriumtyp_28 = 'EINWOHNERZAHL_GEMEINDE';
	case Regionskriteriumtyp_29 = 'EINWOHNERZAHL_ORT';
	case Regionskriteriumtyp_30 = 'KM_UMKREIS';
	case Regionskriteriumtyp_31 = 'BUNDESWEIT';
	case Regionskriteriumtyp_32 = 'PLZ_BEREICH';

}
