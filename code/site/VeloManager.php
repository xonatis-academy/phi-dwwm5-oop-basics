<?php

class VeloManager {

    public function getVelos(): array {
        $connection = new PDO('mysql:host=localhost;port=3306;dbname=phi_dwwm5', 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        $resultat = $connection->query('SELECT * FROM velos');

        $velos = [];
        while ($ligne = $resultat->fetch()) {
            $velo = new Velo();
            $velo->setModel($ligne['nom']);
            $velo->setPrix($ligne['prix']);
            array_push($velos, $velo);
        }

        return $velos;
    }

}

?>