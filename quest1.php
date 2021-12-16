<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1</title>
</head>
<body>
    <h1>Question 1</h1>
<?php
$servname = 'localhost';
$dbname = 'quizz';
$user = 'root';
$pass = '';

try{
    $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sth = $dbco->prepare("
          SELECT Question, Reponse_A, Reponse_B, Reponse_C, Reponse_D
          FROM questions
          WHERE Id_quest = '1'
          ");
        $sth-> execute();
        $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
        echo '<pre>';
        print_r($resultat);
        echo '</pre>';
      }
      catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
      }
?> 
</body>
</html>