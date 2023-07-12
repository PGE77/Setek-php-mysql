<?php
require "assets/database.php";
require "assets/zak.php";
$connection = connectionDB();

// specifikace sloupečků pro zrychlení databáze
$students = getAllStudents($connection, "id, first_name, second_name");
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
            <h1>Škola čar a kouzel v Bradavicích</h1>
        </section>

        <section class="student-list">


            <?php if (empty($students)) :   ?>


                <p>ŽÁDNÍ žáci nebyli nalezeni</p>


            <?php else : ?>
                <ul>
                    <?php foreach ($students as $student) : ?>
                        <li><?php echo htmlspecialchars($student["first_name"]) . " " . htmlspecialchars($student["second_name"]);  ?>

                            <a href="/www1/www3databaze/jeden-zak.php?id=<?php echo $student['id']; ?>">Více informací</a>
                        </li>

                    <?php endforeach; ?>
                </ul>


            <?php endif; ?>


            <a href="/www1/www3databaze/index.php">Zpět na úvodní stranu</a>

        </section>


    </main>

    <?php require "assets/footer.php"; ?>
</body>

</html>