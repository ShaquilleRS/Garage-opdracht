<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Garage search klant2</title>
</head>
<body>
<h1>Garage zoek op klantid 2</h1>
<p>
    Op kenteken gegevens zoeken uit de tabel
    auto van de database garage.
</p>
<?php
// klantid uit het formulier halen
$autokenteken = $_POST["autokentekenvak"];

require_once "connect.php";

$autos = $conn->prepare("SELECT autokenteken, automerk, autotype, autokmstand, klantid FROM auto WHERE autokenteken = :autokenteken");

$autos->execute(["autokenteken"=> $autokenteken]);

echo "<table>";
foreach ($autos as $auto)
{
    echo "<tr>";
    echo "<td>" . $auto["autokenteken"] . "</td>";
    echo "<td>" . $auto["automerk"] . "</td>";
    echo "<td>" . $auto["autotype"] . "</td>";
    echo "<td>" . $auto["autokmstand"] . "</td>";
    echo "<td>" . $auto["klantid"] . "</td>";
    echo "</tr>";
}

echo "</table>";
echo "<a href='gar-menu.php'> Terug naar het menu </a>";

?>
</body>
</html>