<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Garage delete auto 3</title>
</head>
<body>
<h1>Garage delete auto 3</h1>
<p>
    Op autokenteken gegevens zoeken uit de
    tabel auto van de database garage
    zodat ze verwijderd kunnen worden.
</p>

<?php
// klantgegevens uit het formulier halen -----------------------------
$autokenteken = $_POST["autokentekenvak"];
$verwijderen = $_POST ["verwijdervak"];

// klantgegevens verwijderen ---------------------
if ($verwijderen){

    require_once "connect.php";

    $sql = $conn->prepare("DELETE FROM auto WHERE autokenteken = :autokenteken");

    $sql->execute([
        "autokenteken" => $autokenteken,]);

    echo "De gegevens zijn verwijderd. <br />";
}else{
    echo "De gegevens zijn niet verwijderd. <br />";
}

echo "<a href='gar-menu.php'> terug naar het menu </a>";

?>
</body>
</html>