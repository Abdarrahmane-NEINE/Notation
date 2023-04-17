<?php
    require "connect.php";

try{
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->beginTransaction();

  //préparation de la requet
  $pdoStatement = $pdo->prepare('INSERT INTO notation (IdNotification, Notation, Commentaire, DateCrea, IdentificationUser) VALUES (NULL, :Notification, :Commentaire, NULL, :IdUser)');

  //liaison entre les parametres et leur valeur
  $pdoStatement->bindValue(':Notification', $_POST['Notification']);
  $pdoStatement->bindValue(':Commentaire', $_POST['comment'], PDO::PARAM_STR);
  $pdoStatement->bindValue(':IdUser', $_POST['user'], PDO::PARAM_STR);


  //éxécution de la requete préparée

  $insertion = $pdoStatement->execute();

  if($insertion){
    $message = 'La notification a été ajoutée dans la bdd';
    http_response_code(201);
    echo $message;
  }

  $pdo->commit();

}catch(Exception $e){
    // echo 500;
    // for debug
    echo '{"code":"500","message":"Erreur","code_mysql":"'.$e->getCode().'","message_mysql" : "'.$e->getMessage().'" }';

}
