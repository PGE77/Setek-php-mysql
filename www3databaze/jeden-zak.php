<?php
require "assets/database.php";
require "assets/zak.php";


$connection = connectionDB();
$students = null;


if (isset($_GET["id"]) and is_numeric($_GET['id'])) {

    $students = getStudent($connection, $_GET['id']);
} else {
    $students = NULL;
}




// var_dump($students["first_name"]);




// // Aktuální datum
// $aktualniDatum = date('Y-m-d');

// // URL pro získání aktuálního svátku
// $url = 'https://svatkyapi.cz/api/day';

// // Načtení dat ze URL
// $data = file_get_contents($url);

// // Dekódování JSON dat
// $response = json_decode($data, true);

// // Získání informací o dnešním svátku
// $datum = date('j.n.Y', strtotime($response['date']));
// $denVTydnu = $response['dayInWeek'];
// $rok = $response['year'];
// $svatek = $response['name'];

// // Výpis informací
// echo "" . $datum . "<br>";
// echo "" . $denVTydnu . "<br>";
// echo "Svátek má " . $svatek . "<br>";

?>

<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require "assets/header.php"; ?>
    <main>
        <section class="main-heading">
            <h1>Seznam žáků školy</h1>
        </section>
        <section>

            <?php if ($students === null) : ?>
                <p>Žák nenalezen</p>
            <?php else : ?>
                <h2><?php echo htmlspecialchars($students["first_name"]) . " " . htmlspecialchars($students["second_name"]) ?></h2>
                <p><?php echo "Studentův věk je: " . htmlspecialchars($students["age"]); ?></p>
                <p><?php echo "Dodatečné informace: " . htmlspecialchars($students["life"]); ?></p>
                <p><?php echo "A jeho Kolej je: " . htmlspecialchars($students["college"]);  ?></p>

            <?php endif; ?>
        </section>
        <section class="buttons">
            <a href="editace-zaka.php?id=<?php echo $students['id']; ?>">Editovat žáka</a>
            <a href="delete-zak.php?id=<?php echo $students['id']; ?>">Vymazat žáka</a></section:>

        </section>
    </main>
    <?php require "assets/footer.php"; ?>
</body>

</html>