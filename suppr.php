<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suprimmer</title>
</head>

<body>
    <?php

    if (isset($_GET['question']) && !empty($_GET['question'])) {
        $servname = 'localhost';
        $dbname = 'quizz';
        $user = 'root';
        $pass = '';
    }
    try {
        $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sth = $dbco->prepare("
                        DELETE FROM questions WHERE Id_quest= :Question");
                        $sth->bindParam(':Question', $_GET['question']);
                        $sth->execute();
                        
print ('Supprimé');
header('location: index.php');
}
catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}
//");

    ?>
</body>

</html>