<?php
class Client {
    private $cin, $nom, $prenom, $tel, $email, $city, $mod2passe;

    // Constructeur
    public function __construct($cin, $nom, $prenom, $tel, $email, $city, $mod2passe) {
        $this->cin = $cin;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tel = $tel;
        $this->email = $email;
        $this->city = $city;
        $this->mod2passe = $mod2passe;
    }

    // Getters
    public function getCin() {
        return $this->cin;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getTel() {
        return $this->tel;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCity() {
        return $this->city;
    }

    public function getMod2passe() {
        return $this->mod2passe;
    }

    // Setters
    public function setCin($cin) {
        $this->cin = $cin;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setTel($tel) {
        $this->tel = $tel;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function setMod2passe($mod2passe) {
        $this->mod2passe = $mod2passe;
    }
}
?>