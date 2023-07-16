<?php
require "../assets/database.php";
require "../assets/zak.php";

$connection = connectionDB();

// Získává se id z url adresy
if (isset($_GET["id"]) and is_numeric($_GET["id"])) {
    $one_student = getStudent($connection, $_GET["id"]);

    // if true else NULL, není nalezeno id v adresním řádku, zadáno neexistující id, idéčko není v databázi
    if ($one_student) {

        $first_name = $one_student["first_name"];
        $second_name = $one_student["second_name"];
        $age = $one_student["age"];
        $life = $one_student["life"];
        $college = $one_student["college"];
        $id = $one_student["id"];
    } else {
        die("Student nenalezen");
    }
} else {
    $one_student = NULL;
    die("ID není zadáno, student nebyl nalezen");
}

// var_dump($one_student);

// odesílá se formulář
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = $_POST["first_name"];
    $second_name = $_POST["second_name"];
    $age = $_POST["age"];
    $life = $_POST["life"];
    $college = $_POST["college"];

    updateStudent($connection, $first_name, $second_name, $age, $life, $college, $id);

}


?>


    <?php require "../assets/admin-header.php"; ?>
    <main>
        <section class="add-form">
            <?php require "../assets/formular-zak.php";  ?>

        </section>
    </main>




    <?php require "../assets/footer.php"; ?>
