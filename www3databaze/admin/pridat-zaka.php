<?php
//xss cxors side scripting

// htmlspecialchars(); zamezí spouštění scriptů



$first_name = null;
$second_name = null;
$age = null;
$life = null;
$college = null;
// if($_SERVER["REQUEST_METHOD"] === "POST")
if (isset($_POST["odeslat"])) {
    require "../assets/database.php";
    require "../assets/zak.php";
    $connection = connectionDB();

    $first_name = $_POST["first_name"];
    $second_name = $_POST["second_name"];
    $age = $_POST["age"];
    $life = $_POST["life"];
    $college = $_POST["college"];

    createStudent($connection, $first_name, $second_name, $age, $life, $college);

}



//     $result = mysqli_query($connection, $sql);
//     if ($result === false) {

//         echo mysqli_error($connection);
//     }else{
//    $id = mysqli_insert_id($connection);
//       echo "Úspěšně vložen žák s id: $id";

//     }






?>



    <?php require "../assets/admin-header.php"; ?>

    <main>

        <section class="add-form">
            <?php require "../assets/formular-zak.php";  ?>

        </section>



    </main>




    <?php require "../assets/footer.php"; ?>
