<?php
  /*
  PHP Snack 2:
  Passare come parametri GET name, mail e age e
  verificare (cercando i metodi che non
  conosciamo nella documentazione) che:
  1. name sia più lungo di 3 caratteri,
  2. mail contenga un punto e una chiocciola
  3. age sia un numero.
  Se tutto è ok stampare “Accesso riuscito”, altrimenti
  “Accesso negato”.
  */

  $name = $_GET["name"];
  $mail = $_GET["mail"];
  $age = $_GET["age"];
  $result = "";

  if (empty($mail) ) {
    echo "Accesso negato inserire mail";
  } else {
    if (strlen($name) <= 3) {
      echo "Accesso negato lunghezza nome";
    } elseif ( strpos($mail, "@") == false || strpos($mail, ".") == false) {
      echo "Accesso negato mail";
      // echo strpos($mail, "@");
      // echo strpos($mail, ".");
    } elseif (!is_numeric($age) ) {
      echo "Accesso negato età non corretta";
    } else {
      echo "Accesso consentito";

    };
  }
?>