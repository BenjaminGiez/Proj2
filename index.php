<!DOCTYPE html>
<html lang="fr">
<head>
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

<div class="container"></div>
<a href="add_question.php" > <button type="button" class="btn btn-success">Ajouter une question</button></a><br>
<a href="quizz.php" > <button type="button" class="btn btn-success">Tester le Quizz</button></a>
</div>
                                    
<h3>Question 1</h3>
            
            <?php
            
            for($i=0;$i <= count($_SESSION['result'])-1;$i++)
            {
                echo '<form action="dynamik.php" method="post">';
                echo  $_SESSION['result'][$i]['Question'] . '<br>';
                // echo '<button type="submit" value="',$i,'">modifier</button>';
                echo '<input type="submit" name="joze" value="',$i,'">';
                echo '</form>';
            }
            //boucle là
                // echo "Question :" . $_SESSION['result'] [0][0] . '<br>';
                // echo "Réponse 1 :" . $_SESSION['result'] [1] . '<br>';
                // echo "Réponse 2 :" . $_SESSION['result'] [2] . '<br>';
                // echo "Réponse 3 :" . $_SESSION['result'] [3] . '<br>';
                // echo "Réponse 4 :" . $_SESSION['result'] [4] . '<br>';
                
                // echo "<pre>",print_r($_SESSION['result']),"</pre>";
                echo $_SESSION['joze'];
            
                
                
            

                
?>

<button type="button" class="btn btn-info">Éditer</button>
</div><br>
                                     


<body>
    
</body>
</html>
