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
      <h1 class="display-3">PHP ex4p1</h1>
      <p class="lead">Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.
        Les afficher.</p>
        <hr class="my-2">

      </div>
      <!-- header -->
      <header>

      </header>
      <!-- main -->
      <main>
        <!-- création de variables dans php -->
        <p> <?php
        $string = "SoNia";
        $int = 3;
        $float = 3.5;
        $bolean = true;
        ?>
      </p>
      <!-- affichage en liste des variables appelées -->
      <ul>
        <li><?php echo $string;?></li>
        <li><?php echo $int;?></li>
        <li><?php echo $float;?></li>
        <li><?php echo $bolean;?></li>
      </ul>
      <!-- var_dump permet d'appeler la variable mais avec son type et sa valeur -->
      <p><?php echo "\$string = ";var_dump($string)?></p>
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
