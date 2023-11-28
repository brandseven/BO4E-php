<?php namespace BO4E\Com;

/** Die Komponente Ausschreibungsdetail wird verwendet um die Informationen zu einer Abnahmestelle innerhalb eines
Ausschreibungsloses abzubilden.

.. raw:: html

    <object data="../_static/images/bo4e/com/Ausschreibungsdetail.svg" type="image/svg+xml"></object>

.. HINT::
    `Ausschreibungsdetail JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/com/Ausschreibungsdetail.json>`_ */

class Ausschreibungsdetail {

	public ?string $_id = null;
	public ?string $_version = '0.6.1rc14';
	public ?boolean $istLastgangVorhanden = null;
	public ?string $kunde = null;
	public ?\BO4E\Com\Zeitraum $lieferzeitraum = null;
	public ?string $marktlokationsId = null;
	public ?\BO4E\Com\Adresse $marktlokationsadresse = null;
	public ?string $marktlokationsbezeichnung = null;
	public ?string $netzbetreiber = null;
	public ?string $netzebeneLieferung = null;
	public ?string $netzebeneMessung = null;
	public ?\BO4E\Com\Menge $prognoseArbeitLieferzeitraum = null;
	public ?\BO4E\Com\Menge $prognoseJahresarbeit = null;
	public ?\BO4E\Com\Menge $prognoseLeistung = null;
	public ?\BO4E\Com\Adresse $rechnungsadresse = null;
	public ?string $zaehlernummer = null;
	public ?\BO4E\Enum\Zaehlertyp $zaehlertechnik = null;

}
