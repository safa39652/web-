<?php
$con = mysqli_connect("localhost", "root", "", "hotel");

// Vérifier la connexion
if (mysqli_connect_errno()) {
    die("La connexion a échoué : " . mysqli_connect_error());
}
?>