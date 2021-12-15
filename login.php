<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
        session_start();
        if(isset($_POST['username']) && isset($_POST['password']))
{
    $servname = 'localhost';
    $dbname = 'quizz';
    $user = 'root';
    $pass = '';
}
    ?>

</html>