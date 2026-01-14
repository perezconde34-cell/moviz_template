<?php

function loginUser(string $email, string $password):bool
{
    if  ($email === "test@gmail.com" && $password === "ABC123"){
       session_regenerate_id(true);
       $_SESSION["email"] = $email;
        return true;
    }
    return false;
}

function addUser(PDO $pdo, string $nickname, string $email, string $password):bool 
{  
    $query = $pdo->prepare("INSERT INTO user (email, password)
                            VALUES (:email, :password)");
    $query->bindValue(':email', $email);
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query->bindValue(':password', $hash);
    $result = $query->execute();
    return $result
}
    
    