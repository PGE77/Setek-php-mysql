<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moje první php stránky</title>
</head>

<body>

    <h1>Nadpis test </h1>
    <?php
    // echo "<div> David Šetek </div>";
    // echo 100;
    // echo "<br/>";
    // echo "České Budějovice ";
    // echo "<br />";
    // echo 666;
    // echo "<br />";

    // // Toto je komentář
    // /* Toto je 
    // více řádkový 
    // komentář  */


    // var_dump("Davdi šetek");
    // echo "<br />";
    // var_dump(100);
    // echo "<br />";
    // var_dump(58.9);


    // $school_name = "Bradavice";
    // $students_number = 100;

    // echo ("Něco $school_name");
    // echo "<br />";
    // echo ($school_name);
    // echo "<br />";
    // echo ($school_name);
    // pravidla
    // malá písmena je to case sensitive
    // na začátku nesmí být číslovka ani speciální znak
    // popisné názvy
    // víceslovné názvy proměnných , oddělujeme podtržítkem
    // pomlčky nejsou dovolené


    // Základní datové typy


    $school_name = "Bradavice"; // text - string
    var_dump($school_name);
    echo "<br />";
    $number_of_students = 980; // int = celé číslo
    var_dump($number_of_students);
    echo "<br />";
    $average_of_school = 2.3; // float = desetinné číslo číslo
    var_dump($average_of_school);

    // proměnné a html dohromady
    $school_name = "Bradavice";
    echo "<h1 style='color:red;'>$school_name</h1>";
    $sub_heading = "Škola čar a kouzel";
    echo "<h2>$sub_heading </h2>";
    $lorem = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos aliquam iusto, veritatis ab saepe a rerum reprehenderit illo suscipit. Nihil inventore cum quasi sunt quia. Rerum architecto dignissimos tenetur voluptates!";
    echo "<p>$lorem</p>";

    // odkazy - externí

    $link = "http://seznam.cz";
    echo "<a href='$link'>Externí odkaz</a>";
    echo "<br />";
    // odkazy - interní
    $link = "stranky/kontakt.php";
    echo "<a href='$link'>Interní odkaz</a>";
    echo "<br />";

    // Přepisování proměnných (statické a dynamické typování)
    $name = "David";
    $name = 100;
    echo $name;

    // Java používá statické typování
    // String name = "David";

    // Pravda nepravda = true, false true = 1 false = 0 nula se nevypíše , boolean typ
    $kolej = true;
    $adult = true;

    $is_logged = true;
    $database_connection = false;
    echo "Přihlášení uživatele:  $is_logged";
    echo "<br />";
    echo "Napojení do databáze $database_connection";

    $kolej = null;
    echo $kolej;
    $kolej = "Nebelvír";
    echo $kolej;
    echo "<br />";

    // Matematické operace, závorky provedou první výpočet , jinak se postupuje následovně, nejprve se dělí , pak násobí a pak odčítá a sčítá
    $students_2022 = 100;
    $students_2023 = 124;

    $result = $students_2023 - $students_2022;
    echo "Výsledek rozdílu: $result";
    echo "<br />";
    // Spojování proměnných, concatenance se dělá pomocí teček

    $first_name = "Harry";
    $second_name = "Potter";
    $friend_first_name = "Ron";


    echo $first_name . " " . $second_name;
    echo "<br />";
    echo $first_name . " a jeho kamarád " . $friend_first_name;
    echo "<br />";

    // typ conversion, konverze datových typů, při matematikcké operaci si string převede na čísla
    $year_price = "1500";
    $year_count = "7";
    $result = $year_price * $year_count;

    echo $result;
    echo "<br />";
    var_dump($result);
    echo "<br />";
    var_dump($year_price);
    echo "<br />";
    var_dump($year_count);
    echo "<br />";

    // negace dělá se pomocí vykřičníku
    $database_connection = true;

    var_dump(!$database_connection);
    echo "<br />";

    // Výpis textu a proměnné
    $first_name = "Harry";
    echo "Ahoj " . $first_name;
    echo "<br />";
    echo "Ahoj $first_name";
    echo "<br />";
    echo "Ahoj {$first_name}";


    // Datové typy

    $main_name = "Bradavice"; // text - string
    $students_count = 780;  // celé číslo neboli integer
    $grade_point_average = 3.4; // Desetinné číslo neboli float
    $adult = true; // true nebo false, pravda a nepravda, bolean, pravdivostní hodnota

    // Další datový typ : pole (array)
    $srudent_1 = "Harry";
    $student_2 = "Hermiona";
    $student_3 = "Ron";

    $students = ["Harry", "Ron", "Hermiona"];
    echo "<br />";
    var_dump($students);
    echo "<br />";
    echo $students[0];
    echo "<br />";
    echo $students[1];
    echo "<br />";
    echo $students[2];
    echo "<br />";
    // $students2 = array("Harry", "Ron", "Hermiona");
    // echo $students2[0];
    // echo "<br />";
    // echo $students2[1];
    // echo "<br />";
    // echo $students2[2];
    // echo "<br />";

    for ($i = 0; $i < count($students); $i++) {
        echo "<br /> $students[$i]";
    }

    // Asociativní pole
    $students_1 = [
        "jedna" => "Harry",
        "ctyri" => "Ron",
        "pet" => "Hermiona"

    ];
    echo $students_1["jedna"];
    echo "<br />";
    echo $students_1["ctyri"];
    echo "<br />";
    echo $students_1["pet"];
    echo "<br />";
    echo "<br />";
    var_dump($students_1);

    $name = "Harry";
    $second_name = "Potter";

    $students_2 = [
        "first_name" => $name,
        "second_name" => $second_name,
        "college" => "Nebelvír",
        "age" => 15,
        "result" => null
    ];
    echo "<br />";
    var_dump($students_2);

    // dvou dimenzionální pole

    $students = [
        [
            "first_name" => "Harry",
            "second_name" => "Potter",
            "age" => 15
        ],
        [
            "first_name" => "Hermiona",
            "second_name" => "Grangerová",
            "age" => 14
        ],
        [
            "first_name" => "Ron",
            "second_name" => "Weasley",
            "age" => 15
        ]


    ];
    echo "<br />";
    echo $students[0]["first_name"];
    echo "<br />";
    echo $students[0]["second_name"];
    echo "<br />";
    echo $students[0]["age"];
    echo "<br />";
    var_dump($students);
    echo "<br />";

    // foreach cyklus plus index a plus asociativní pole, na práci s polem

    $students = ["Harry", "Ron", "Hermiona", "Malfoy", "David"];

    foreach ($students as $index => $one_student) {
        $index = $index + 1;
        // $index += 1; // stejné použití jako první řádek, jedno a to samé
        // $index++; // další zkrácený zápis zvyšovánío jedničku
        echo "<br />$index: $one_student";
    };
    echo "<br />";
    $student1 = [
        "jmeno" => "Harry",
        "příjmení" => "Potter",
        "věk" => 15


    ];

    foreach ($student1 as $index => $one_information) {
        echo $index . ": " . $one_information;
        echo "<br />";
    }

    // cyklus for

    for ($i = 1; $i <= 10; $i = $i + 1) {
        echo $i . ". Harry";
        echo "</br>";
    };

    // cyklus for , praktičtější příklad

    for ($i = 1; $i <= 5; $i++) {
        echo "<a href='stranka$i.php' >Další stránka</a>";
        echo "</br>";
    }


    // cyklus while = nevíme kolikrát
    $month = 1;
    while ($month <= 12) {
        echo $month;
        echo "</br>";
        $month = $month + 1;
    }
    $test_questions = ["1. otázka", "2. otázka", "3. otázka ", "4. otázka", "5. otázka"];
    $maximum = 5;
    $counter = 0;
    while ($counter < $maximum) {
        echo $test_questions[$counter];
        echo "<br>";
        $counter = $counter + 1;
    }


    // Podmínky


    if (5 > 2) {
        echo "Ano je to pravda";
    } else {

        echo "Není to pravda";
    }
    echo "<br>";

    $name = "Harry";

    // Podmínky a proměnné

    $college = "Zmijozel";
    if ($college === "Nebelvír") {
        echo "Vstupte";
    } else {
        echo "Nemáte oprávnění vstoupit";
    }
    echo "<br>";

    // podmínky a empty

    $articles = ["Článek 1"];
    var_dump(empty($articles));
    if (empty($articles)) {
        echo "Neexistují žádné články";
        exit();
    } else {
        echo "Jsou k dispozici články pro vyspání do stránky";
    }

    // Vypasání článků z databáze

    echo "<br>";
    echo " Další kod na stránce";


    // podmínky a elseif

    $hour = 15;
    $message = null;
    if ($hour <= 9) {

        $message = "Dobré ránno";
    } elseif ($hour < 12) {

        $message = "Dobré odpoledne";
    } elseif ($hour == 12) {

        $message = "Dobré poledne";
    } elseif ($hour < 18) {

        $message = "Dobré odpoledne";
    } else {

        $message = "Dobrý večer";
    }

    echo "<br>";

    echo $message;

    // podmínky a logické operátory and a or
    echo "<br>";
    $age = 15;
    if ($age >= 18 and $age < 65) {
        echo "Dospělý, není v důchodovém věku";
    } elseif ($age < 18) {
        echo "Dospívající";
    } else {
        echo "Člověk v důchodovém věku";
    }


    // and - a zároveň
    // true, true = true
    // true, false = false
    // false, true = false
    // false, false = false


    // logický operátor nebo , or
    // 12345,66778
    echo "<br>";
    $password = "12345";

    if ($password === "12345" or $password === "66778") {
        echo "Dveře se otevírají, můžete vstoupit";
    } else {
        echo "Neplatný kod, zkuste to prosím znovu.";
    }

    // or, nebo
    // true, true = true
    // true, false = true
    // false, true = true
    // false, false = false


    // switch statement
    echo "<br>";
    $day = "po";

    switch ($day) {
        case "po";
            echo "Pondělí";
            break;
        case "ut";
            echo "Úterý";
            break;
        case "st";
            echo "Středa";
            break;
        case "ct";
            echo "Čtvrtek";
            break;
        case "pa";
            echo "Pátek";
            break;
        case "so";
            echo "Sobota";
            break;
        case "ne";
            echo "Neděle";
            break;
        default:
            echo "Špatně zadaná zkratka dne";
            break;
    }






















    ?>


</body>

</html>