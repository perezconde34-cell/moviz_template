<?php
try
{
    $pdo = new PDO("mysql:dbname=movies;host=localhost;charset=utf8mb4", "root", "root");
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>