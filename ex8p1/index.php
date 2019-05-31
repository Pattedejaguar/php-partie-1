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
      <h1 class="display-3">PHP ex7p1</h1>
      <p class="lead"> Créer 3 variables.
        Dans la première mettre le résultat de l'opération 3 + 4.
        Dans la deuxième mettre le résultat de l'opération 5 * 20.
        Dans la troisième mettre le résultat de l'opération 45 / 5.
        Afficher le contenu des variables.
        <hr class="my-2">
        <p></p>
      </div>
      <!-- header -->
      <header>

      </header>
      <!-- main -->
      <main>
        <?php
        $resultat0 = 3+4;
        $resultat1 = 5*20;
        $resultat2 = 45/5;
        ?>
        <p class="text-center">
          <ul>les résultats respectifs sont :
            <li><?php echo $resultat0 ?></li>
            <li><?php echo $resultat1 ?></li>
            <li><?php echo $resultat2 ?></li>
          </ul>
        </p>
      </main>
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
