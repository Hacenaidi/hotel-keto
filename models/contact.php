<?php
class Contact {
    private $nom, $email, $tel, $message, $reading;

    // Constructeur
    public function __construct($nom, $email, $tel, $message, $reading) {
        $this->nom = $nom;
        $this->email = $email;
        $this->tel = $tel;
        $this->message = $message;
        $this->reading = $reading;
    }

    // Getters
    public function getNom() {
        return $this->nom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTel() {
        return $this->tel;
    }

    public function getMessage() {
        return $this->message;
    }

    public function getReading() {
        return $this->reading;
    }

    // Setters
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTel($tel) {
        $this->tel = $tel;
    }

    public function setMessage($message) {
        $this->message = $message;
    }

    public function setReading($reading) {
        $this->reading = $reading;
    }
}

?>