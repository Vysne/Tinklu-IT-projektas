<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8"> 
    <title>Sąskaitų Sistema</title>
    <!-- Išorinis stiliaus failiukas -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <section id="pageContent">
        <?php
        // Tikrina ar $_GET kintamasis neturi nustatytos reikšmės
        if(!isset($fileName) || empty($fileName)) {
        ?>
            <section id="userSelectionWrapper">
                <a class="userSelectionButtons" href="index.php?action=login">Prisijungimas</a>
                <a class="userSelectionButtons" href="index.php?action=register">Registracija</a>
            </section>
        <?php
        }
        else
        {
            include $fileName;
        }
        ?>
    </section>
</body>
</html>