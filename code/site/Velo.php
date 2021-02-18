<?php

class Velo {

    private $model;
    private $prix;

    public function getModel(): string {
        return $this->model;
    }

    public function setModel(string $value) {
        $this->model = $value;
    }

    public function getPrix(): string {
        return $this->prix;
    }

    public function setPrix(string $value) {
        $this->prix = $value;
    } 

}

?>