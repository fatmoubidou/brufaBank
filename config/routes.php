<?php

//Function qui retourne un tableau contenant les routes de notre application

//Modèle des routes
//"NomDeLaRoute" => [
//  "Controller",
//  "Fonction",
//  Optionnel [
//    "parametre1" => ["typeAttendu", optionnel[valeurAttendu]],
//    "parametre2" => ["typeAttendu", optionnel[valeurAttendu]]
//  ]
// "status" => "role"
//]
function getRoutes() {
  return [
    "" => [
      "admin",
      "loginUser"
    ],
    "login" => [
      "admin",
      "loginUser",
    ],

    //***** ACCOUNT *****//
    "accounts" => [
      "account",
      "listAccount",
      ["id" => ["integer"]
      ],
      //"status" => "user"
     ],
     "myAccount" => [
       "account",
       "detailAccount",
       ["id" => ["integer"]
       ],
       //"status" => "user"
      ],
      "account/debit" => [
       "account",
       "debitAccount",
       ["id" => ["integer"]
       ],
       //"status" => "user"
      ],
      "account/delete" => [
       "account",
       "deleteAccount",
       ["id" => ["integer"]
       ],
       //"status" => "user"
      ],
  ];
}

 ?>
