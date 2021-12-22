<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="images/png" sizes="16x16" href="https://sites.ffkarate.fr/hautsdefrance/wp-content/uploads/sites/113/2018/01/English-Grammar-Quiz-Time.png" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>OnlineFormaQuizz</title>
    <?php
    session_start()
    // $servname = 'localhost';
    // $dbname = 'quizz';
    // $user = 'root';
    // $pass = '';

    // $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
    // $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    ?>
</head>
<h1>Tableau de Bord</h1>

<div class="wrapper">
    <h1 class="content">
        <span>B</span>
        <span>E</span>
        <span>N</span>
        <span>J</span>
        <span>I</span>
        <span>Q</span>
        <span>U</span>
        <span>I</span>
        <span>Z</span>
        <span>Z</span>
    </h1>
</div>

<br>

<body>


    <br>


    <section id="panneau">


        <?php




        include 'dynamik.php';
        for ($i = 0; $i <= count($_SESSION['result']) - 1; $i++) {


            echo '<div class="container_question">

<h3>Question ' . ($i + 1) . '</h3>';
            echo  $_SESSION['result'][$i]['Question'] . '<br>';
            echo "Réponse 1 :" . $_SESSION['result'][$i]['Reponse_A'] . '<br>';
            echo "Réponse 2 :" . $_SESSION['result'][$i]['Reponse_B'] . '<br>';
            echo "Réponse 3 :" . $_SESSION['result'][$i]['Reponse_C'] . '<br>';
            echo "Réponse 4 :" . $_SESSION['result'][$i]['Reponse_D'] . '<br>';
            echo '<a href="modif.php?question=' . $_SESSION['result'][$i]['Id_quest'] . '"><button type="submit" class="btn btn-warning btn-sm">Editer</button></a>';
            echo '<a href="suppr.php?question=' . $_SESSION['result'][$i]['Id_quest'] . '"><button type="submit" class="btn btn-danger btn-sm">Supprimer</button>' . '<br></a></div>';
        }


        ?>

    </section>

    <br>

    <div class="varicelle">
        <a href="add_question.php"> <button type="button" class="btn btn-primary btn-lg">Ajouter une question</button></a><br>
        <a href="quizz.php"> <button type="button" class="btn btn-success btn-lg">Tester le Quizz</button></a>
    </div>

</body>

</html>