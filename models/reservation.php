<?php
class Reservation {
    private $date_debut, $date_fin, $prix_total, $id_client, $id_chamber,$confirmation;

    // Constructeur
    public function __construct($date_debut, $date_fin, $prix_total, $id_client, $id_chamber,$confirmation) {
        $this->date_debut = $date_debut;
        $this->date_fin = $date_fin;
        $this->prix_total = $prix_total;
        $this->id_client = $id_client;
        $this->id_chamber = $id_chamber;
        $this->confirmation = $confirmation;
    }

    // Getters
    public function getDateDebut() {
        return $this->date_debut;
    }

    public function getDateFin() {
        return $this->date_fin;
    }

    public function getPrixTotal() {
        return $this->prix_total;
    }

    public function getIdClient() {
        return $this->id_client;
    }

    public function getIdChamber() {
        return $this->id_chamber;
    }
    public function getconfirmation() {
        return $this->confirmation;
    }

    // Setters
    public function setDateDebut($date_debut) {
        $this->date_debut = $date_debut;
    }

    public function setDateFin($date_fin) {
        $this->date_fin = $date_fin;
    }

    public function setPrixTotal($prix_total) {
        $this->prix_total = $prix_total;
    }

    public function setIdClient($id_client) {
        $this->id_client = $id_client;
    }

    public function setIdChamber($id_chamber) {
        $this->id_chamber = $id_chamber;
    }
}

?>