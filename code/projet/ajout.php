<?php
// 0. On verifie si le nom et le prix est dans le payload
if (isset($_POST['nom']) && isset($_POST['prix']))
{
    // 1. Se connecter a la base de données
    $connection = new PDO('mysql:host=localhost;port=3306;dbname=phi_dwwm5', 'root', '');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    // 2. Envoyer une requete SQL préparée
    $requete = $connection->prepare('INSERT INTO velos(nom, prix) VALUES(?, ?)');

    // 3. Demander l'exécution de cette requete préparée
    $requete->execute([
        $_POST['nom'],
        $_POST['prix']
    ]);
}
?>

