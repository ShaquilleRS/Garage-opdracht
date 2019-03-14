<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Gar-update-klant3.php</h1>
    <p>
        Klantgegevens wijzigen in de tabel klant van de database garage.
    </p>
    <?php
    //klantgegevens uit het formulier halen
    $klantid            = $_POST["klantidvak"];
    $klantnaam          = $_POST["klantnaamvak"];
    $klantadres         = $_POST["klantadresvak"];
    $klantpostcode      = $_POST["klantpostcodevak"];
    $klantplaats        = $_POST["klantplaatsvak"];

    //updaten klantgegevens
    require_once "connect.php";

    $sql = $conn->prepare("update klant set klantnaam = :klantnaam, klantadres = :klantadres, klantpostcode = :klantpostcode, klantplaats = :klantplaats where klantid = :klantid");
    $sql->execute(["klantid" => $klantid, "klantnaam" => $klantnaam, "klantadres" => $klantadres, "klantpostcode" => $klantpostcode, "klantplaats" => $klantplaats]);

    echo "De klant is gewijzigd. <br>";
    echo "<a href='gar-menu.php'> Terug naar menu </a>";
    ?>
</body>
</html>