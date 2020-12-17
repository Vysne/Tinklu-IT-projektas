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
            <form method="POST">
                <select name="klientai" id="klientuPasirinkimas">
                    <?php
                        foreach($klientai as $klientas) {
                            echo "<option value='{$klientas['kliento_nr']}'>{$klientas['vardas']} {$klientas['pavarde']}</option>";
                        }
                    ?>
                </select>
                <span>Nuo:</span>
                <input type="date" name="nuo">
                <span>Iki:</span>
                <input type="date" name="iki">
                <input type="submit" name="parodyti" value="Pateikti">
            </form>

            <?php
            if(count($saskaitos) > 0) {
            ?>
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
                            $totalBalance += $saskaita["suma"];
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
                <h3>Iš viso: €<?php echo $totalBalance; ?></h3>
            <?php   
            }
            ?>
        </div>
    </div>
</body>
</html>