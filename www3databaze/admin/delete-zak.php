<?php
require "../assets/database.php";
require "../assets/zak.php";
$connection = connectionDB();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    deleteStudent($connection, $_GET["id"]);
}

?>


    <?php require "../assets/admin-header.php"; ?>
    <main>
        <section class="delete-form">
            <form method="POST">

                </p>Opravdu si přejete Smazat žáka ?<p>
                    <button>Smazat žáka</button>
                    <a href="/www1/www3databaze/admin/jeden-zak.php?id=<?= $_GET['id'] ?>">Zrušit</a>

            </form>

        </section>
    </main>
    <?php require "../assets/footer.php"; ?>
