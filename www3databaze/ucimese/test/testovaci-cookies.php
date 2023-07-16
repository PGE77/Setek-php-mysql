<?php

// pokud se něco nastavuje vevnitř jako nižší úroveň se ví oi o těch cookies, které se nastavili na úrovni výš a nevbí o těch, které se nastaví o úroveň níž
// v rámci celé domény se nastavuje lomítko jako poslední parametr, globálně všude

setcookie("Testovacícookies", "test", time() + 60 * 60 * 24, "/");

var_dump($_COOKIE);

