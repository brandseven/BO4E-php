<?php namespace BO4E\Bo;

/** Modell zur Abbildung eines kompakten Lastganges.
In diesem Modell werden die Messwerte in Form von Tagesvektoren mit fester Anzahl von Werten übertragen.
Daher ist dieses BO nur zur Übertragung von äquidistanten Messwertverläufen geeignet. */

class LastgangKompakt {

	public ?string $_id = null;
	public ?\BO4E\Enum\Typ $_typ = \BO4E\Enum\Typ::LASTGANG_KOMPAKT;
	/** @var \BO4E\Com\ExterneReferenz[] */
	public ?array $externeReferenzen = null;
	public ?string $lokationsId = null;
	public ?string $lokationstyp = null;
	public ?\BO4E\Enum\Mengeneinheit $messgroesse = null;
	public ?string $obisKennzahl = null;
	public ?\BO4E\Enum\Sparte $sparte = null;
	/** @var \BO4E\Com\Tagesvektor[] */
	public ?array $tagesvektoren = null;
	public ?string $version = null;
	public ?\BO4E\Com\Zeitintervall $zeitintervall = null;

}
