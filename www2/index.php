<?php
$text = "Hello, world!";
$length = strlen(str_replace(' ', '', $text));

echo "Délka textu bez mezer je: " . $length;
$array = array("Hello, world!", "This is a test", "Lorem ipsum dolor sit amet");
$lengths = array();

foreach ($array as $text) {
    $length = strlen(str_replace(' ', '', $text));

    echo $length;
}

$array = array("Apple", "Banana", "Orange", "Mango");

$output = implode(", ", $array);

echo $output;



?>

<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naše první stránky</title>
</head>

<body>
    <header>
        <!-- sem  require je přísnej, nevypíše se obsah po chybě v require -->
        <h1>Davids gaming company</h1>
        <?php include "assets/header.php";  ?>
    </header>

    <main>
        <section>
            <!-- <h1>Nadpis 1. úrovně</h1>
            <h2>Nadpis 2. úrovně</h2>
            <h3>Nadpis 3. úrovně</h3>
            <h4>Nadpis 4. úrovně</h4>
            <h5>Nadpis 5. úrovně</h5>
            <h6>Nadpis 6. úrovně</h6> -->
            <h1>Historie filmu</h1>
            <p>Lorem ipsum dolor sit amet <strong>consectetur adipisicing elit.</strong> Quidem, distinctio dignissimos vero pariatur <br>iusto fugit, atque repellendus rem explicabo impedit in magni, optio vitae laboriosam velit sunt quae praesentium? Unde.</p>
            <a href="https://www.google.com" target="_blank">Vyhledávač google</a>
        </section>
        <section>
            <ol>
                <li>Nůžky</li>
                <li>Rozstříhej papír</li>
                <li>Slož papír</li>

            </ol>
            <ul>
                <li>Rohlík</li>
                <li>Housky</li>
                <li>Kečup</li>
                <li>Čaj</li>

            </ul>
        </section>
        <section>
            <h1>Odkazy na další stránky webu</h1>
            <a href="sluzby.php">Služby</a><br />
            <a href="kontakt.php">Kontaktujte nás</a><br />
            <img src="img/obr1.webp" alt="Gaming" />

        </section>
    </main>

    <?php include "assets/footer.php";  ?>
</body>

</html>