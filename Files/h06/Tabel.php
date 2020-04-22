<?php

$port = "3308";
$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=phpschool" . ';port=' . $port, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully <br>";
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . '<br>';
}

$query = "SELECT * FROM cursist";
$stmt = $conn->prepare($query) or die ('error19');
$stmt->execute() or die ('error 21');

echo  '<table>';

while($array = $stmt->fetch()) {
echo '<tr>';
    echo "<td>" . $array['cursistnr'] . "</td>";
echo "<td>" . $array['roepnaam'] . "</td>";
echo "<td>" . $array['naam'] . "</td>";
echo "<td>" . $array['straat'] . "</td>";
echo "<td>" . $array['postcode'] . "</td>";
echo "<td>" . $array['plaats'] . "</td>";
echo "<td>" . $array['geslacht'] . "</td>";
echo "<td>" . $array['geb_datum'] . "</td>";
echo '</tr>';
}

echo '</table>';