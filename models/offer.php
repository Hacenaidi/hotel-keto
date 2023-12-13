<?php
class Offer {
    private $validite;
    private $id_chamber;
    private $pct;

    // Constructeur
    public function __construct($validite, $id_chamber, $pct) {
        $this->validite = $validite;
        $this->id_chamber = $id_chamber;
        $this->pct = $pct;
    }

    // Getter pour validite
    public function getValidite() {
        return $this->validite;
    }

    // Getter pour id_chamber
    public function getIdChamber() {
        return $this->id_chamber;
    }

    // Getter pour pct
    public function getPct() {
        return $this->pct;
    }
}
?>
