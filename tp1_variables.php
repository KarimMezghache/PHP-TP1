<?php

// Variables
$firstName = "Martin";
$age = 28;
$lastName = "Dufresne";
$isMale = true;
$height = 1.85;
$salary = null;

// Valider les différents types de variables
is_string($firstName);
is_string($lastName);
is_int($age);
is_bool($isMale);
is_double($height);
is_float($height);
is_null($salary);

// Afficher et identifier les variables de type "string" et "int"
echo $firstName, ' ', gettype($firstName) . '<br>';
echo $lastName, ' ', gettype($lastName) . '<br>';
echo $age, ' ', gettype($age) . '<br>';

?>