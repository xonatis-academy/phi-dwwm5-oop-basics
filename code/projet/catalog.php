<?php
// 1. Se connecter a la base de données
$connection = new PDO('mysql:host=localhost;port=3306;dbname=phi_dwwm5', 'root', '');
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

// 2. Récupération des lignes de la table velos
// 2.1 Envoyer une requete SQL pour tout sélectionner
$resultat = $connection->query('SELECT * FROM velos');
// 2.3 Pour chaque ligne du resultat de notre requete
$velos = [];
while ($ligne = $resultat->fetch())
{
    // Ajouter la ligne dans le tableau $velos
    array_push($velos, $ligne);
}
?>

<table>
    <tr>
        <th>Nom</th>
        <th>Prix</th>
    </tr>

    <?php
    foreach ($velos as $velo)
    {
    ?>

    <tr>
        <td><?php echo $velo['nom']; ?></td>
        <td><?php echo $velo['prix']; ?></td>
    </tr>

    <?php
    }
    ?>

</table>
