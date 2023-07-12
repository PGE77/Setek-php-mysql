<form method="POST">
    <input type="text" name="first_name" placeholder="Křestní jméno" value="<?php echo htmlspecialchars($first_name); ?>" required><br>
    <input type="text" name="second_name" placeholder="Příjmení" value="<?php echo htmlspecialchars($second_name); ?>" required><br>
    <input type="number" name="age" placeholder="Věk" min="10" value="<?php echo htmlspecialchars($age); ?>" required><br>
    <textarea name="life" placeholder="Podrobnosti o žákovi" required><?php echo htmlspecialchars($life); ?></textarea><br>
    <input type="text" name="college" placeholder="Kolej" value="<?php echo htmlspecialchars($college); ?>" required><br>
    <input type="submit" name="odeslat" value="Uložit" required><br>
</form>