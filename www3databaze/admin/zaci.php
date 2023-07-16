<?php
require "../assets/database.php";
require "../assets/zak.php";
$connection = connectionDB();

// specifikace sloupečků pro zrychlení databáze
$students = getAllStudents($connection, "id, first_name, second_name");
?>

    <?php require "../assets/admin-header.php"; ?>
    <main>
        <section class="main-heading">
            <h1>Seznam žáků</h1>
        </section>

        <section class="student-list">


            <?php if (empty($students)) :   ?>


                <p>ŽÁDNÍ žáci nebyli nalezeni</p>


            <?php else : ?>
                <ul>
                    <?php foreach ($students as $student) : ?>
                        <li><?php echo htmlspecialchars($student["first_name"]) . " " . htmlspecialchars($student["second_name"]);  ?>

                            <a href="/www1/www3databaze/admin/jeden-zak.php?id=<?php echo $student['id']; ?>">Více informací</a>
                        </li>

                    <?php endforeach; ?>
                </ul>


            <?php endif; ?>


            <a href="/www1/www3databaze/index.php">Zpět na úvodní stranu</a>

        </section>


    </main>

    <?php require "../assets/footer.php"; ?>
