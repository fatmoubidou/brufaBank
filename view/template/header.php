<!doctype html>
<html lang="en" class="h-100">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- icone -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- css -->
    <?php loadCss('main.css') ?>
    <?php loadCss('normalize.css') ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>BrufaBank</title>
  </head>
  <body class="h-100 d-flex flex-column justify-content-between">

      <header class="header py-3">
        <div class="container">
          <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4">
            </div>
            <div class="col-4 text-center">
              <a class="header-logo text-dark" href="#">BrufaBank</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
              <!-- ajouter test pour affichage lien deconnexion-->
              <a class="btn btn-sm btn-outline-secondary" <?php setHref('logout'); ?>>Se deconnecter</a>
            </div>
          </div>
        </div>
      </header>
      <main class="h-100 d-flex">
