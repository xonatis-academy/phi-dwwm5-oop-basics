<!-- DE LA DB VERS LE FRONT : Point 2 -->
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