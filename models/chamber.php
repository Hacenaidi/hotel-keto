<?php

class Chamber {
    private $nom;
    private $prix;
    private $nb_place;
    private $url_image;
    private $disponibilite;
    private $numero_chambre;

    // Constructeur
    public function __construct($nom, $prix, $nb_place, $url_image, $disponibilite, $numero_chambre) {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->nb_place = $nb_place;
        $this->url_image = $url_image;
        $this->disponibilite = $disponibilite;
        $this->numero_chambre = $numero_chambre;
    }

    // Getters
    public function getNom() {
        return $this->nom;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function getNbPlace() {
        return $this->nb_place;
    }

    public function getUrlImage() {
        return $this->url_image;
    }

    public function getDisponibilite() {
        return $this->disponibilite;
    }

    public function getNumeroChambre() {
        return $this->numero_chambre;
    }

    // Setters
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }

    public function setNbPlace($nb_place) {
        $this->nb_place = $nb_place;
    }

    public function setUrlImage($url_image) {
        $this->url_image = $url_image;
    }

    public function setDisponibilite($disponibilite) {
        $this->disponibilite = $disponibilite;
    }

    public function setNumeroChambre($numero_chambre) {
        $this->numero_chambre = $numero_chambre;
    }
}
?>




