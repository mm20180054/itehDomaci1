<?php

class Ploca
{
    public $id;
    public $naziv;
    public $datumIzadvanja;
    public $izvodjacImePrezime;

    public function __construct($id = null, $naziv = null, $datumIzadvanja = null, $izvodjacImePrezime = null)
    {
        $this->id = $id;
        $this->ime = $naziv;
        $this->prezime = $datumIzadvanja;
        $this->izvodjacImePrezime = $izvodjacImePrezime;
    }

    public static function getAll(mysqli $connection)
    {
        return $connection->query("SELECT p.id,p.naziv, p.datumIzdavanja, CONCAT(i.ime,' ', i.prezime) AS izvodjacImePrezime FROM ploca p INNER JOIN izvodjac i ON p.izvodjac_id=i.id");
    }
}