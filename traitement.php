<?php
    require "connect.php";


    //préparation de la requet
    $pdoStatement = $pdo->prepare('INSERT INTO gse_d_notation(IdNotification, Notation, Commentaire, DateCrea, IdentificationUser) VALUES (NULL, :Notification, :Commentaire, NULL, :IdUser)');

    //liaison entre les parametres et leur valeur
    $pdoStatement->bindValue(':Notification', $_POST['Notification']);
    $pdoStatement->bindValue(':Commentaire', $_POST['comment'], PDO::PARAM_STR);
    $pdoStatement->bindValue(':IdUser', $_POST['user'], PDO::PARAM_STR);


    //éxécution de la requete préparée

    $insertion = $pdoStatement->execute();

    if($insertion){
      // $message = 'La notification a été ajoutée dans la bdd';
      echo http_response_code(201);
    }
    else {
        echo http_response_code(501);
    }

 ?>
