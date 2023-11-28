<?php namespace BO4E;

/** Object containing information about a Marktlokation

.. raw:: html

    <object data="../_static/images/bo4e/bo/Marktlokation.svg" type="image/svg+xml"></object>

.. HINT::
    `Marktlokation JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Marktlokation.json>`_ */

class Marktlokation {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::MARKTLOKATION;
	public ?string $_version = '0.6.1rc14';
	public ?string $bilanzierungsgebiet = null;
	public ?\BO4E\Enum\Bilanzierungsmethode $bilanzierungsmethode = null;
	public ?\BO4E\Geschaeftspartner $endkunde = null;
	public ?\BO4E\Enum\Energierichtung $energierichtung = null;
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	public ?\BO4E\Enum\Gasqualitaet $gasqualitaet = null;
	public ?\BO4E\Enum\Gebiettyp $gebietstyp = null;
	public ?\BO4E\Com\Geokoordinaten $geoadresse = null;
	public ?string $grundversorgercodenr = null;
	public ?boolean $istUnterbrechbar = null;
	public ?\BO4E\Com\Katasteradresse $katasterinformation = null;
	/** @var \BO4E\Enum\Kundentyp[] */
	public ?array $kundengruppen = null;
	public ?\BO4E\Com\Adresse $lokationsadresse = null;
	public ?string $marktlokationsId = null;
	public ?string $netzbetreibercodenr = null;
	public ?\BO4E\Enum\Netzebene $netzebene = null;
	public ?string $netzgebietsnr = null;
	public ?\BO4E\Enum\Sparte $sparte = null;
	public ?\BO4E\Enum\Verbrauchsart $verbrauchsart = null;
	public ?\BO4E\Com\Messlokationszuordnung $zugehoerigeMesslokation = null;

}
