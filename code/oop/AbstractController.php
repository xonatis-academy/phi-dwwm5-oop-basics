<?php

abstract class AbstractController {

    public function render(string $file) {
        include __DIR__ . $file;
    }

}

?>