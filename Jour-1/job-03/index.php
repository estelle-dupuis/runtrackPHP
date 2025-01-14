<?php
// variables primitifs
$booleanVar = true; //  booléen
$intVar = 42; //  entier
$stringVar = "Hello LaPlateforme!"; // chaîne de caractères
$floatVar = 3.14; // nombre a virgule flottante

// Début du tableau HTML
echo "<table border='1'>"; // une bordure tableau
echo "<thead>";
echo "<tr>";
echo "<th>Type</th>";
echo "<th>Nom</th>";
echo "<th>Valeur</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

// Ajout  lignes variable
echo "<tr>";
echo "<td>" . gettype($booleanVar) . "</td>"; // Type de la variable
echo "<td>booleanVar</td>"; // Nom de la variable
echo "<td>" . ($booleanVar ? 'true' : 'false') . "</td>"; // Valeur de la variable
echo "</tr>";

echo "<tr>";
echo "<td>" . gettype($intVar) . "</td>";
echo "<td>intVar</td>";
echo "<td>" . $intVar . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . gettype($stringVar) . "</td>";
echo "<td>stringVar</td>";
echo "<td>" . $stringVar . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . gettype($floatVar) . "</td>";
echo "<td>floatVar</td>";
echo "<td>" . $floatVar . "</td>";
echo "</tr>";

// Fin du tableau HTML
echo "</tbody>";
echo "</table>";
?>