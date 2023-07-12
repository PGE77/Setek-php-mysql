
<?php 
// super globální proměnné vypisuje z url za adresou, výsledkem je to co zadám do url za otazníkem, ale jenom komplet


echo $_SERVER["QUERY_STRING"];

// k vytažení pouze čásla nebo stringu je třeba toto, podle názvu parametru

echo "<br />";
echo $_GET["id"];
echo "<br />";

// GET a POST

// GEt to cpe z url adresy 

// Post 

// odešle data na stránku z formuláře například heslo nedá se do parametru...


?>