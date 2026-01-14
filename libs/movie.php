<?php

function getMovies(PDO $pdo):array
{
    // On prépare la requête
    $query = $pdo->prepare("SELECT * FROM movie");
    // On exécute la requête
    $query->execute();
    // On récupère les films dans un tableau
    $movies = $query->fetchAll(PDO::FETCH_ASSOC);

    return $movies;
}


function getMovieById(PDO $pdo, int $id):array
{
    $query = $pdo->prepare("SELECT * FROM movie WHERE id = :id");
    $query->bindValue(":id", $id, PDO::PARAM_INT);
    $query->execute();

    $movie = $query->fetch(PDO::FETCH_ASSOC);

    return $movie;

}



