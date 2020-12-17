<?php
session_start();
unset($_SESSION["prisijunges"]);
unset($_SESSION["kliento_nr"]);
unset($_SESSION["statusas"]);
session_destroy();
header("Location: index.php");
?>