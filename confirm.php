<?php
session_start();
echo "Sekmingai prisiregistravote. Dabar glaite prisjungti. Jusu kliento numeris yra " . $_SESSION["kliento_nr"];
echo "<br><a href='index.php?action=login'>Prisijungti</a>";
session_destroy();
?>