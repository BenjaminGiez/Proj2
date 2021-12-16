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
//    session_start();
    try{
        $servname = 'localhost';
        $dbname = 'quizz';
        $user = 'root';
        $pass = '';


//$_SESSION['id']=$_GET['repA'];
$dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$tri = "SELECT * From questions "; 
$sth = $dbco->prepare($tri);
$sth->execute();
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
$_SESSION['result']=$result;

// $tri = "INSERT INTO * From questions "; 
// $sth = $dbco->prepare($tri);
// $sth->execute();
    
// $tri = "DELETE From questions WHERE "; 
// $sth = $dbco->prepare($tri);
// $sth->execute();
 ;
 //$_SESSION['joze']=$_POST['joze'];
    // echo "<pre>",print_r($result),"</pre>";
//header("location: index.php");
    
    }
  
catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}
    ?>
</body>
</html>