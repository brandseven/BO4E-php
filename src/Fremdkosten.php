<?php namespace BO4E;

/** Mit diesem BO werden die Fremdkosten, beispielsweise für eine Angebotserstellung oder eine Rechnungsprüfung,
übertragen.
Die Fremdkosten enthalten dabei alle Kostenblöcke, die von anderen Marktteilnehmern oder Instanzen erhoben werden.

.. raw:: html

    <object data="../_static/images/bo4e/bo/Fremdkosten.svg" type="image/svg+xml"></object>

.. HINT::
    `Fremdkosten JSON Schema <https://json-schema.app/view/%23?url=https://raw.githubusercontent.com/Hochfrequenz/BO4E-python/main/json_schemas/bo/Fremdkosten.json>`_ */

class Fremdkosten {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::FREMDKOSTEN;
	public ?string $_version = '0.6.1rc14';
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	public ?\BO4E\Com\Zeitraum $gueltigkeit = null;
	/** @var \BO4E\Com\Fremdkostenblock[] */
	public ?array $kostenbloecke = null;
	public ?\BO4E\Com\Betrag $summeKosten = null;

}
