<?php


echo "<h2>Opdracht 1: celsius naar fahrenheit</h2>";

//celsius naar fahrenheit function

function celsiusNaarFahrenheit($celsius)
{
    $fahrenheit = ($celsius * 1.8) + 32;

    return $celsius . " graden Celsius = " . $fahrenheit . " Fahrenheit.";
}

echo celsiusNaarFahrenheit(10);

echo "<h2>Opdracht 2: deelbaar door 3</h2>";

//deelbaar door 3 opdracht
// als de uitkomst niets is is de boolean false en als de uitkomst 1 is is de boolean true
function deelbaarDoor3($invoer)
{
    if ($invoer % 3 == 0) {
        $invoer = true;

    } else {
        $invoer = false;
    }
    return "invoer = " . $invoer;
}

echo deelbaarDoor3(4);

echo "<h2>Opdracht 3 omgekeerde string</h2>";

//opdracht string omkeren

function stringOmkeren ($stringInvoer){

    return strrev("$stringInvoer");

}

echo stringOmkeren("Deze string is omgekeerd.");

