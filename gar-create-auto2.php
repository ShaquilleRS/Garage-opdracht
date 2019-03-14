<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Garage create auto 2</title>
</head>
<body>
<h1>Garage create auto 2</h1>
<p>
    Een auto toevoegen aan de tabel
    auto in de database garage.
</p>

<?php
// klantgegevens uit het formulier halen -----------------------------
$id = NULL; // komt niet uit het formulier
$autokenteken = $_POST ["autokentekenvak"];
$automerk = $_POST ["automerkvak"];
$autotype = $_POST ["autotypevak"];
$autokmstand = $_POST ["autokmstandvak"];
$klantid = $_POST ["klantidvak"];

// klantgegevens invoeren in de tabel ---------------------
require_once "connect.php";

$sql = $conn->prepare("insert into auto values (:autokenteken, :automerk, :autotype, :autokmstand, :klantid)");

$sql->execute([
    "autokenteken" => $autokenteken,
    "automerk" => $automerk,
    "autotype" => $autotype,
    "autokmstand" => $autokmstand,
    "klantid" => $klantid
]);

echo "De auto is toegevoegd <br /br>";
echo "<a href='gar-menu.php'> terug naar het menu </a>";

?>
</body>
</html>