<?php 

/**
 * Přesměrovává na zadanou url adresu
 * 
 * 
 * @param string - $path - adresa na kterou se má přesměrovat
 * 
 * @return void - nic nevrací
 * 
 */

function redirectUrl($path) {

    if (isset($_SERVER["HTTPS"]) and $_SERVER["HTTPS"] != "off") {
        $url_protocol = "https";
    } else {
        $url_protocol = "http";
    }
    // localhost  = $_SERVER["HTTP_HOST"]
    // přesměrování
    header("location: $url_protocol://" . $_SERVER['HTTP_HOST'] . $path);  


}