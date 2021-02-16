<?php

class Product {

    private $id;
    private $nom;
    private $prix;

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function setId(string $value) {
        $this->id = $value;
    }

    public function setNom(string $value) {
        $this->nom = $value;
    }

    public function setPrix(string $value) {
        $this->prix = $value;
    }

}

?>