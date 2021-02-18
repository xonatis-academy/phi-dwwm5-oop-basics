<?php

class HomeController {

    private $veloManager;

    public function __construct(VeloManager $a) {
        $this->veloManager = $a;
    }

    public function index() {
        $velos = $this->veloManager->getVelos();

        include __DIR__.'/index.html.php';

    }

}

?>