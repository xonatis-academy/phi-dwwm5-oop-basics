<?php

require __DIR__.'/User.php';

$thomas = new User('Dupont', 'Thomas');
$sandra = new User('Ferrero', 'Sandra');

var_dump($thomas);
var_dump($sandra);

?>
