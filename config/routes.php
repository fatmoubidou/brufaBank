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
    "listUsers" => [
      "user",
      "listUsers"
    ],
    "createUser" => [
      "user",
      "createUser"
    ],
    "delUser" => [
      "user",
      "delUser"
    ],
    "addAccount" => [
      "user",
      "addAccountUser",
      ["id" => ["integer"]
    ],
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
