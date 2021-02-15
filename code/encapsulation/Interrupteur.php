<?php

class Interrupteur {
    
    private $pointA;
    private $pointB;

    private function lierAetB() {
        echo 'Les points A et B sont liés';
    }

    public function allumer() {
        $this->lierAetB();
    }

}

?>