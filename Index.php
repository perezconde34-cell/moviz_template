<?php
require_once "libs/pdo.php";
require_once "libs/movie.php";
require_once "templates/header.php";
$movies = getMovies($pdo);

?>

<div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="assets/logo-moviz.png" class="d-block mx-lg-auto img-fluid" alt="Logo Moviz" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Découvrez notre sélection de films</h1>
      <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
    </div>
  </div>
</div>

<div class="container px-4 py-5" id="featured-3">
  <h2 class="pb-2 border-bottom">Sélection de films</h2>

  <div class="row">
    <?php foreach($movies as $index=>$movie): ?>
      <div class="col-md-4 my-2">
        <div class="card w-100">
          <img src="https://placehold.co/600x400?text=Exemple" class="card-img-top" alt="Exemple">
          <div class="card-body">
            <h5 class="card-title"><?= $movie["title"] ?></h5>
            <a href="movie_details.php?id=<?= $movie["id"] ?>" class="btn btn-primary">Voir la fiche</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <?php require_once "templates/footer.php" ?>