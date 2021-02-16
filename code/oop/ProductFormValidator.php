<?php

class ProductFormValidator implements IFormValidator {

    public function verify() {
        if (isset($_POST['nom']) && isset($_POST['prix'])) {
            return true;
        }
        return false;
    }

}

?>