<?php

class ProductManager {

    public function add(Product $product) {
        $connection = new PDO('mysql:host=localhost;port=3306;dbname=phi_dwwm5', 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        $requete = $connection->prepare('INSERT INTO velos(nom, prix) VALUES(?, ?)');

        $requete->execute([
            $product->getNom(),
            $product->getPrix()
        ]);
    }

    public function list() {
        $connection = new PDO('mysql:host=localhost;port=3306;dbname=phi_dwwm5', 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        $resultat = $connection->query('SELECT * FROM velos');
        $velos = [];
        while ($ligne = $resultat->fetch())
        {
            $product = new Product();
            $product->setId($ligne['id']);
            $product->setNom($ligne['nom']);
            $product->setPrix($ligne['prix']);
            array_push($velos, $product);
        }
        return $velos;
    }

}

?>