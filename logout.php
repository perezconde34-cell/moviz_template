
<?php

session_start();

$_session = [];


session_destroy();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Déconnexion</title>
</head>
<body>

    <h2>Déconnectez-vous!</h2>

    <form action="logout.php" method="post">
        <button type="submit">Se déconnecter</button>
    </form>

    <a href="index.php">Annuler</a>

</body>
</html>
