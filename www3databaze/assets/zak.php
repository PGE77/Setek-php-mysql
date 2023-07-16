<?php
require "url.php";
/**
 * 
 * 
 * Získá jednoho žáka z databáze podle id
 * 
 * @param object týká se to $connection - napojení na databázi
 * @param integer $id = id jednoho konkrétního žáka
 * 
 * 
 * @return mixed  asociativní pole, které obsahuje informace o jednom konkrétním žákovi nebo vrátí null, pokud žák nebyl nalezen
 * 
 */

function getStudent($connection, $id, $columns = "*")
{
    $sql = "SELECT $columns FROM student WHERE id = ?";
    // Příprava na připojení a vykonání dotazu
    $stmt = mysqli_prepare($connection, $sql);

    if ($stmt === false) {
        echo mysqli_error($connection);
    } else {
        // dopln to idéčko....
        mysqli_stmt_bind_param($stmt, "i", $id);
        // vykonej pokud je true
        if (mysqli_stmt_execute($stmt)) {
            // získat spojení a dotaz 
            $result = mysqli_stmt_get_result($stmt);
            // Převést na asciativní pole
            return mysqli_fetch_array($result, MYSQLI_ASSOC);
        }
    }
}


/**
 * 
 * 
 * Aktualizuje údaje o jednom žákovi
 * 
 * @param object týká se to $connection - napojení na databázi
 * @param string $first_naame -Křestní jméno žáka
 * @param string $second_name - Příjmení žáka
 * @param integer $age - věk žáka
 * @param string $life - informace o žákovi
 * @param string $college - kolej žáka
 * @param integer $id = id jednoho konkrétního žáka
 * 
 * 
 * @return void - nevrací žádnou hodnotu
 * 
 */

function updateStudent($connection, $first_name, $second_name, $age, $life, $college, $id)
{

    $sql = "UPDATE student SET first_name = ?, second_name = ?, age = ?, life = ?, college = ? WHERE id = ?";

    $stmt = mysqli_prepare($connection, $sql);
    if (!$stmt) {
        echo mysqli_error($connection);
    } else {
        mysqli_stmt_bind_param($stmt, "ssissi", $first_name, $second_name, $age, $life, $college, $id);
        if (mysqli_stmt_execute($stmt)) {
            // echo "Informace o žákovi byly aktualizovány";
            redirectUrl("/www1/www3databaze/admin/jeden-zak.php?id=$id");
        }
    }
}

/**
 * Vymaže studenta z databáze podle daného id
 * 
 * @param object $connection - propojení z databízí
 * @param integer $id - idíčko žáka
 * 
 * 
 *@return void 
 * 
 * 
 */



function deleteStudent($connection, $id)
{
    $sql = "DELETE FROM student WHERE id = ?";
    // Příprava na připojení a vykonání dotazu
    $stmt = mysqli_prepare($connection, $sql);

    if ($stmt === false) {
        echo mysqli_error($connection);
    } else {
        // dopln to idéčko....
        mysqli_stmt_bind_param($stmt, "i", $id);
        // vykonej pokud je true
        if (mysqli_stmt_execute($stmt)) {
            // získat spojení a dotaz 
            redirectUrl("/www1/www3databaze/admin/zaci.php");
        }
    }
}

/**
 * Vrátí všechny, výpis žáků z databáze
 * 
 * 
 * @param object - $connection připojení do databáze
 * 
 * 
 * @return array - pole objektů kde každý objekt je jeden žák
 */

function getAllStudents($connection, $columns = "*"){
// echo "Úspěšné přihlášení do databáze";
$sql = "SELECT $columns FROM student";
$result = mysqli_query($connection, $sql);
// var_dump($result);
if ($result === false) {
    echo mysqli_error($connection);
} else {
    $students = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $students;
}
// var_dump($students);


}

/**
 * Vložení žáka do databáze
 * 
 * @param object týká se to $connection - napojení na databázi
 * @param string $first_naame -Křestní jméno žáka
 * @param string $second_name - Příjmení žáka
 * @param integer $age - věk žáka
 * @param string $life - informace o žákovi
 * @param string $college - kolej žáka
 * 
 * 
 * 
 * @return void - nevrací žádnou hodnotu 
 * 
 * 
 */




function createStudent($connection, $first_name, $second_name, $age, $life, $college){
    $sql = "INSERT INTO student (first_name, second_name, age, life, college) VALUES (?,?,?,?,?)";
    $statement = mysqli_prepare($connection, $sql);

    if ($statement === false) {
        echo mysqli_error($connection);
    } else {
 

        // Ověření, zda jsou všechna povinná pole vyplněna
        if (empty($first_name) || empty($second_name) || empty($age) || empty($life) || empty($college)) {
            echo "Některé povinné pole nebylo vyplněno.";
        } else {
            mysqli_stmt_bind_param($statement, "ssiss", $first_name, $second_name, $age, $life, $college);

            if (mysqli_stmt_execute($statement)) {
          
                // localhost  = $_SERVER["HTTP_HOST"]
             $id = mysqli_insert_id($connection);
             echo "Úspěšně vložen žák s id: $id";
           
             redirectUrl("/www1/www3databaze/admin/jeden-zak.php?id=$id");

            } else {
                echo mysqli_stmt_error($statement);
            }
            mysqli_stmt_close($statement);
            mysqli_close($connection);
        }
    }


}
