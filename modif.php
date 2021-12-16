<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
</head>
<body>
<form action="" method="post">
        <div class="c100">
            <label for="quest">Question : </label>
            <input type="text" id="quest" name="quest">
        </div>
        <div class="c100">
            <label for="rep">Réponse A : </label>
            <input type="repA" id="repA" name="repA">
        </div>
        <div class="c100">
            <label for="rep">Réponse B : </label>
            <input type="repB" id="repB" name="repB">
        </div>
        <div class="c100">
            <label for="rep">Réponse C : </label>
            <input type="repC" id="repC" name="repC">
        </div>
        <div class="c100">
            <label for="rep">Réponse D : </label>
            <input type="repD" id="repD" name="repD">
            <div class="c100" id="submit">
                <input type="submit" value="Modifier">
                <div class="container"></div>
<a href="index.php"> <button type="button" class="btn btn-warning">Retour Tableau de Bord</button></a><br>
            </div>
    </form>
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
UPDATE questions  (Question, Reponse_A, Reponse_B, Reponse_C, Reponse_D)
VALUES (:Question, :Reponse_A, :Reponse_B, :Reponse_C, :Reponse_D)
");
        $sth->bindParam(':Question', $quest);
        $sth->bindParam(':Reponse_A', $repA);
        $sth->bindParam(':Reponse_B', $repB);
        $sth->bindParam(':Reponse_C', $repC);
        $sth->bindParam(':Reponse_D', $repD);

        $quest = $_POST['quest'];
        $repA = $_POST['repA'];
        $repB = $_POST['repB'];
        $repC = $_POST['repC'];
        $repD = $_POST['repD'];
        $sth->execute();
        echo 'went good';
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
    ?>
</body>
</html>