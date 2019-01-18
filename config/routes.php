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
      "user",
      "login"
    ],
    "login" => [
      "user",
      "login"
    ],
    "listUsers" => [
      "listUsers",
      "getUsers",
    ],
    "logout" => [
      "user",
      "deconnexion",
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
      "account/credit" => [
       "account",
       "creditAccount",
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
      "account/transfer" => [
       "account",
       "transferAccount",
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
