<?php
session_start();

var_dump($_SESSION["name"]);
var_dump($_SESSION["type"]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if ($_SESSION["is_logged"]) : ?>
        <p>Vítejte v administraci</p>
    <?php else : ?>
        <p>Nemáte oprávnění</p>
    <?php endif; ?>

</body>

</html>