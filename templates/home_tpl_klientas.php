<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Sąskaitų sistema</title>
</head>
<body>
    <div id="clientWrapper">
        <div id="clientMenu">
            <div class="clientName">
                <p class="greeting">Sveiki, <?php echo $duomenys["vardas"] . " " . $duomenys["pavarde"]; ?></p>
            </div>
            <div class="logoutField">
                <a class="logout-button" href="logout.php">Atsijungti</a>
            </div>
        </div>

        <div id="saskaituTableWrapper">
            <h1 class="table-title">Sąskaitos</h1>
            <table>
                <tr>
                    <th>Serijos Nr.</th>
                    <th>Saskaitor Nr.</th>
                    <th>Gavėjas</th>
                    <th>Mokėjimo Paskirtis</th>
                    <th>Kiekis</th>
                    <th>Data</th>
                    <th>Suma</th>
                </tr>
                <?php
                    foreach($saskaitos as $saskaita) {
                        ?>
                        <tr>
                            <td><?php echo $saskaita["serijos_nr"]; ?></td>
                            <td><?php echo $saskaita["saskaitos_nr"]; ?></td>
                            <td><?php echo $saskaita["gavejas"]; ?></td>
                            <td><?php echo $saskaita["mokejimo_paskirtis"]; ?></td>
                            <td><?php echo $saskaita["kiekis"]; ?></td>
                            <td><?php echo $saskaita["data"]; ?></td>
                            <td>€<?php echo $saskaita["suma"]; ?></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>