<?php 

// simetricna enkripcija e koga 5 pati klikame istata enkripcija da ni ja dava
// asimetricna e obratno 
require_once __DIR__ . "/constsdb.php";

function encrypt($text) 
{  
    return openssl_encrypt($text, "AES-128-ECB", ENCRYPTION_PASSWORD);
}


function decrypt($encrypttxt) 
{
    return openssl_decrypt($encrypttxt, "AES-128-ECB", ENCRYPTION_PASSWORD);
}

?>
