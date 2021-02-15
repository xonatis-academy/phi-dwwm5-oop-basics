<?php

$text = 'Bonjour, comment ca va ?';

// Afficher $text si la longueur est inférieur à 25 caractères, 
// sinon afficher les 25 premiers caractères suivi de '...'

// si la longueur est inférieur à 25 caractères
    // Afficher $text
// sinon
    // afficher les 25 premiers caractères suivi de '...'

if (strlen($text) < 25) {
    var_dump($text);
} else {
    var_dump(   substr($text, 0, 25) . '...'  );
}

?>