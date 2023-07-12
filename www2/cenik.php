<?php
// kod můžeme psát nahoře nebo dole.....ukládáme do proměnné pokud pak proměnnou vypíšeme
$price = 50;
$hour = 8;
$message = null;
if ($hour < 9) {
    $message = "<p>Dobré ráno</p>";
} elseif ($hour < 12) {
    $message =  "<p>Dobré dopoledne</p>";
} elseif ($hour === 12) {
    $message =  "<p>Dobré poledne</p>";
} elseif ($hour < 18) {
    $message =  "<p>Dobré odpoledne</p>";
} else {
    $message =  "<p>Dobrý večer</p>";
}


?>

<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceík našich služeb</title>
</head>

<body>
    <header>
    <h1>Ceník</h1>
    <?php include "assets/header.php";  ?>
</header>
    <p>Cena našich služeb je: <?php echo $price; ?> Kč.</p>


    <!-- jiný způsob zápisu -->

    <!-- <?php if ($hour < 9) : ?>
        <p>Dobré ráno</p>;
        <?php elseif ($hour < 12) : ?>
        <p>Dobré dopoledn</p>
        <?php elseif ($hour === 12) : ?>
        <p>Dobré poledne</p>
        <?php elseif ($hour < 18) : ?>
        <p>Dobré odpoledne</p>
        <?php else : ?>
        <p>Dobrý večer</p>
        <?php endif; ?> -->


    <?php
    echo $message;

    // $hour = 19;
    // if ($hour < 9) {
    //     echo "<p>Dobré ráno</p>";
    // } elseif ($hour < 12) {
    //     echo "<p>Dobré dopoledne</p>";
    // } elseif ($hour === 12) {
    //     echo "<p>Dobré poledne</p>";
    // } elseif ($hour < 18) {
    //     echo "<p>Dobré odpoledne</p>";
    // } else {
    //     echo "<p>Dobrý večer</p>";
    // }










    ?>
    <?php
    $students = ["Harry", "Ron", "Hermiona"];



    ?>
    <ul>
        <?php foreach ($students as $one_student) : ?>
            <li><?php echo $one_student; ?></li>
        <?php endforeach; ?>
    </ul>


    <?php ?>
    <?php include "assets/footer.php";  ?>
</body>

</html>