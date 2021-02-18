<?php

class User {

    public $nom;
    public $prenom;
    public $email;
    public $password;

    public function __construct(string $a, string $b) {
        $this->nom = $a;
        $this->prenom = $b;
    }

}

?>
