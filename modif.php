<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
</head>
<body>
<?php
if (
    isset($_POST['quest']) && !empty($_POST['quest']) &&
    isset($_POST['repA'])  && !empty($_POST['repA']) &&
    isset($_POST['repB'])  && !empty($_POST['repB']) &&
    isset($_POST['repC'])  && !empty($_POST['repC']) &&
    isset($_POST['repD'])  && !empty($_POST['repD'])
) {

    $servname = 'localhost';
    $dbname = 'quizz';
    $user = 'root';
    $pass = '';
    try {
        $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sth = $dbco->prepare("
        UPDATE questions
        SET 
        question = :Question,
        Reponse_A = :Reponse_A,
        Reponse_B = :Reponse_B,
        Reponse_C = :Reponse_C,
        Reponse_D = :Reponse_D
        WHERE Id_quest =:Modif
");
        $sth->bindParam(':Question', $quest);
        $sth->bindParam(':Reponse_A', $repA);
        $sth->bindParam(':Reponse_B', $repB);
        $sth->bindParam(':Reponse_C', $repC);
        $sth->bindParam(':Reponse_D', $repD);
        $sth->bindParam(':Modif', $_GET['question']);

        $quest = $_POST['quest'];
        $repA = $_POST['repA'];
        $repB = $_POST['repB'];
        $repC = $_POST['repC'];
        $repD = $_POST['repD'];
        $sth->execute();
        echo 'Question mise à jour !';
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
    ?>
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
        $sth = $dbco->prepare(" SELECT * FROM Questions WHERE Id_quest= :Modif");
        $sth->bindParam(':Modif', $_GET['question']);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);
}
        
    catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}


    ?>
<form action="" method="post">
        <div class="c100">
            <label for="quest">Question : </label>
            <input type="text" id="quest" name="quest" value="<?php echo $result['Question']; ?>">
        </div>
        <div class="c100">
            <label for="rep">Réponse A : </label>
            <input type="repA" id="repA" name="repA" value="<?php echo $result['Reponse_A']; ?>">
        </div>
        <div class="c100">
            <label for="rep">Réponse B : </label>
            <input type="repB" id="repB" name="repB" value="<?php echo $result['Reponse_B']; ?>">
        </div>
        <div class="c100">
            <label for="rep">Réponse C : </label>
            <input type="repC" id="repC" name="repC" value="<?php echo $result['Reponse_C']; ?>">
        </div>
        <div class="c100">
            <label for="rep">Réponse D : </label>
            <input type="repD" id="repD" name="repD" value="<?php echo $result['Reponse_D']; ?>">
</div>
            <div class="c100" id="submit">
                <input type="submit" value="Modifier">
                <div class="container"></div>
<a href="index.php"> <button type="button" class="btn btn-warning">Retour Tableau de Bord</button></a><br>
            </div>
    </form>
    
</body>
</html>