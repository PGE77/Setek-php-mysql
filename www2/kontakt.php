<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
</head>

<body>
    <header>
        <!-- sem -->
        <h1>Kontakt</h1>
        <?php require "assets/header.php";  ?>
    </header>

    <main>
        <section>
            <!-- sem -->
        </section>
        <section>
        <h1>Formulář</h1>
            <!--  readonly disabled, autofocus, required  -->
            <form action="">
                <input type="text" placeholder="First name" name="first_name"><br>
                <input type="text" placeholder="Second name" name="second_name"><br>
                <input type="password" placeholder="Password" name="password"><br>
                <input type="email" name="email" placeholder="Email"><br>
                <input type="date" name="date"><br>
                <input type="hidden" name="form-type" value="kontakt">
                <input type="number" placeholder="Váha"  name="weight" step="10" min="1" max="1000"><br>
                <input type="url"><br>
                <textarea name="message" placeholder="Vaše zpráva"></textarea><br>

                <input type="checkbox" value="tricko">Tričko zdarma<br>
                <input type="checkbox" value="zalozka">Záložka do knížky <br>
                <input type="checkbox" value="el-kniha">Elektronická kniha <br>
                <select name="color[]">
                    <optgroup label="Hlavní barva">
                        <option value="red">Červená</option>
                        <option value="green" selected>Zelená</option>Paprika4857
                        <option value="yellow">Žlutá</option>
                    </optgroup>
                    <optgroup label="Barva okraje">
                        <option value="red">Červená</option>
                        <option value="green">Zelená</option>
                        <option value="yellow">Žlutá</option>
                    </optgroup>
                </select><br>

                <input type="radio" name="country" value="cr">Česká republika<br>
                <input type="radio" name="country" value="germany">Německo <br>
                <input type="radio" name="country" value="portugal">Portugalsko <br>
                <!-- <input type="submit" value="Registrovat"> -->
                <button>Odeslat</button>

            </form>

        </section>
        <section>
            <h1>Odkazy na další stránky webu</h1>
            <a href="index.php">Hlavní stránka</a><br />
            <a href="sluzby.php">Služby</a><br />
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d10407.851794142402!2d17.390038!3d49.296045!3m2!1i1024!2i768!4f13.1!5e0!3m2!1scs!2scz!4v1684324442154!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </main>

    <?php include "assets/footer.php";  ?>
</body>

</html>