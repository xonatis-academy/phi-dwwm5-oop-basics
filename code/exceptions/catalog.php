<?php

function lanceUneErreur() {

    throw new Exception('Nom utilisateur incorrect');

}

try {

    lanceUneErreur();

} catch(Exception $e) {

    echo '<h1 style="color: blue">' . $e->getMessage() . '</h1>';

}

?>