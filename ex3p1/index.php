<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title></title>
</head>
<body>
  <!-- container Bootstrap -->
  <div class="container text-center">
    <div class="jumbotron">
      <h1 class="display-3">PHP ex3p1</h1>
      <p class="lead">Créer une variable km. L'initialiser à 1. Afficher son contenu.
        Changer sa valeur par 3. Afficher son contenu.
        Changer sa valeur par 125. Afficher son contenu.</p>
        <hr class="my-2">
        <p></p>
      </div>
      <!-- header -->
      <header>
      </header>
      <!-- main -->
      <main>
        <?php $km = 1;?>
        <p class="duStylePourSidneY">a<?php echo $km;?></p>
        <?php $km = 3;?>
        <p>b<?php echo $km;?></p>
        <?php $km = 125;?>
        <p>c<?php echo $km;?></p>
      </main>
      <!-- footer -->
      <footer>

      </footer>
    </div>
    <!-- scripts JQuery Popper et Bootstrap-->
    <script src="assets/js/jquery-3.4.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- mon script principal -->
    <script src="assets/js/main.js"></script>
  </body>
  </html>
