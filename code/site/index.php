<?php

include __DIR__.'/Velo.php';
include __DIR__.'/VeloManager.php';
include __DIR__.'/HomeController.php';

$veloManager = new VeloManager();
$controller = new HomeController($veloManager);
$controller->index();

?>