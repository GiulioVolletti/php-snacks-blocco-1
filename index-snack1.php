<?php
  /*
  PHP Snack 1:
  Creiamo un array 'matches' contenente altri array i
  quali rappresentano delle partite di basket di
  un’ipotetica tappa del calendario. Ogni array della
  partita avrà una squadra di casa e una squadra
  ospite, punti fatti dalla squadra di casa e punti fatti
  dalla squadra ospite.
  Stampiamo a schermo tutte le partite con questo
  schema:
  Olimpia Milano - Cantù | 55 - 60
  */
  $matches = [
    [
      "casa" => [
        "nome" => "Vanoli Basket Cremona",
        "punti" => 58,
      ],
      "ospite" => [
        "nome" => "UNAHOTELS Reggio Emilia",
        "punti" => 83,
      ],
    ],
    [
      "casa" => [
        "nome" => "Allianz Pallacanestro Trieste",
        "punti" => 63,
      ],
      "ospite" => [
        "nome" => "A|X Armani Exchange Milano",
        "punti" => 76,
      ],
    ],
    [
      "casa" => [
        "nome" => "Banco di Sardegna Sassari",
        "punti" => 67,
      ],
      "ospite" => [
        "nome" => "Carpegna Prosciutto Pesaro",
        "punti" => 54,
      ],
    ]
  ];
  // echo count($matches);
  for ($i=0; $i < count($matches); $i++) {
    // Olimpia Milano - Cantù | 55 - 60
    echo  $matches[$i]["casa"]["nome"]." - ".$matches[$i]["ospite"]["nome"]." | ".$matches[$i]["casa"]["punti"]." - ".$matches[$i]["ospite"]["punti"]."<br>";

  }
?>
