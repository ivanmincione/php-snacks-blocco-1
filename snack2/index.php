<?php
// Passare 3 parametri GET: name, mail e age e verificare (cercando nella documentazione i metodi che non conosciamo) che:
// 1. name sia più lungo di 3 caratteri,
// 2. mail contenga un punto e una chiocciola
// 3. age sia un numero.
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

    $name = $_GET["name"];
    $email = $_GET["email"];
    $age = $_GET["age"];

    // // stampe per test
    // echo strlen($name);
    // echo strpos($email, ".");
    // echo strpos($email, "@");
    // //funzione per verificare se il dato inserito sia di tipo numerico -> return TRUE/FALSE
    // echo is_numeric($age);

    if (strlen($name) > 3 && strpos($email, ".") !== false && strpos($email, "@") !== false && is_numeric($age) === true && $age >= 0 && $age <=120){
        echo " Accesso riuscito ";
    } else {
        echo " Accesso negato ";
    }

    //per testare la query string --> "?" indica la partenza poi ogni chiave/valore seguente va separata da "&" (oppure da ";") !!!

 ?>
