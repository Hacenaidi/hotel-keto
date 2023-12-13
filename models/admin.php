<?php

class Admin {
    private $login, $mdp, $nom, $prenom;

    // Constructeur
    public function __construct($login, $mdp, $nom, $prenom) {
        $this->login = $login;
        $this->mdp = $mdp;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    // Getters
    public function getLogin() {
        return $this->login;
    }

    public function getMdp() {
        return $this->mdp;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    // Setters
    public function setLogin($login) {
        $this->login = $login;
    }

    public function setMdp($mdp) {
        $this->mdp = $mdp;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }
}

?>