<?php
// Vytvoření funkce

/**
 * 
 * Popise studenta
 * 
 * @param string $first_name - Křestní jméno studenta
 * @param string $second_name - Příjmení studenta
 * @param integer $age - Věk studenta
 * 
 * @return string popis žáka
 * Vypíše popis studenta
 */

// jakmile se narazí na return , který lze použít pouze jednou funkce končí, nevypisujeme, neobjevuje se na stránce


function studentDescription ($first_name, $second_name, $age){
return "Toto je student " . $first_name . " " . $second_name . ". Věk studenta je " . $age . " let.<br>" ;
echo "<br>";

}

echo studentDescription("Harry", "Potter", 15);
$student = studentDescription("Hermiona", "Grangerová", 12);
echo $student;


