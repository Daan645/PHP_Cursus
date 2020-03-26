<!DOCTYPE html>
<head>
    <title>h03 Opdracht 7: Zwemclubs</title>
</head>
<style>
    table, tr, td {
        border: solid black 1px;
        border-collapse: collapse;
    }

    td {
        padding: 10px;
    }
    img {
        width 25px;
        margin-right: 5px;
    }

    td.plaatjes {
        border: solid white 1px;
    }

</style>
<body>
<table>
<?php
$leden = 0;

$Zwemclubs = array(
    "De spartelkuikens" =>25,
    "De waterbuffels" => 32,
    "Plonsmderin" =>11,
    "Bommetje" => 23);


foreach ($Zwemclubs as $zwemclubnaam => $aantalzwemmers) {
    echo '<tr>';

    //clubnamen
    echo "<td>$zwemclubnaam</td>";


    //Zwemmersaantallen
    echo "<td>$aantalzwemmers</td>";

    //Plaatjes
    echo '<td class="plaatjes">';
$plaatjes = floor($aantalzwemmers / 5);
for ($i = 0; $i < $plaatjes; $i++) {
    echo '<img src="../Plaatjes/Zwemclubs/Zwemleden.PNG">';
}
echo '</td>';

echo '</tr>';

}
?>
</table>
</body>
</html>


