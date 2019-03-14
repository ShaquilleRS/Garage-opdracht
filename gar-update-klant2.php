<!DOCTYPE>
<html lang="en">
<head>
    <meta charset=UTF-8">
    <title>gar-update-klant2</title>
</head>
<body>
<h1>Garage update 2</h1>
<p>Dit formulier wordt gebruikt om klantgegevens te wijzigen in de tabel van de database garage.</p>
<?php
$klantid = $_POST["klantidvak"];
require_once "connect.php";

$klanten = $conn->prepare("select klantid, klantnaam, klantadres, klantpostcode, klantplaats from klant where klantid = :klantid");
$klanten->execute(["klantid" => $klantid]);

//klantgegevens in een nieuw formulier laten zien
echo "<form action='gar-update-klant3.php' method='post'>";
foreach($klanten as $klant)
{
    //klantid mag niet gewijzigd worden
    echo " klantid:" . $klant["klantid"];
    echo " <input type='hidden' name='klantidvak'";
    echo " value =' " . $klant["klantid"] . " '> <br> ";

    echo " klantnaam: <input type='text' ";
    echo " name = 'klantnaamvak' ";
    echo " value = '" . $klant["klantnaam"] . "' ";
    echo " > <br>";

    echo " klantadres: <input type='text' ";
    echo " name = 'klantadresvak' ";
    echo " value = '" . $klant["klantadres"] . "' ";
    echo " > <br>";

    echo " klantpostcode: <input type='text' ";
    echo " name = 'klantpostcodevak' ";
    echo " value = '" . $klant["klantpostcode"] . "' ";
    echo " > <br>";

    echo " klantplaats: <input type='text' ";
    echo " name = 'klantplaatsvak' ";
    echo " value = '" . $klant["klantplaats"] . "' ";
    echo " > <br>";
}
echo "<input type='submit'>";
echo "</form>";

//er moet eigenlijk nog gecontroleerd worden op een bestaand klantid
?>
</body>
</html>