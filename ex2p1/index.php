<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>ex2p1</title>
</head>
<body>
  <!-- container Bootstrap -->
  <div class="container text-center">
    <!-- header -->
    <header>
      <div class="jumbotron">
        <h1 class="display-3">PHP ex2p1</h1>
        <p class="lead">Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier. Afficher leur contenu..</p>
        <hr class="my-2">
      </div>
    </header>
    <!-- main -->
    <main>
      <!-- on déclare nos variables et on ouvre la balise php -->
      <?php
      $prenom = "Gerard";
      $nom = "Manvussa";
      $age = 5;
      ?>
      <!-- on affiche nos variables avec echo et entre balises php -->
      <p class="text-center">Bonjour <b> monsieur <?php echo $prenom.' '.$nom.' vous avez toujours '.$age.' ans ?'?></b></p>
      <!-- à ne pas faire :  -->
      <p class="text-center">Bonjour <b> monsieur <?php echo"$prenom $nom vous avez toujours $age ans"?></b></p>

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
