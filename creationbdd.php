<?php

            $servname = 'localhost';
            $dbname = 'quizz';
            $user = 'root';
            $pass = '';
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "CREATE TABLE questions(
                        Id_quest INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        Question VARCHAR (100) NOT NULL,
                        Reponse_A VARCHAR(30) NOT NULL,
                        Reponse_B VARCHAR(30) NOT NULL,
                        Reponse_C VARCHAR(70) NOT NULL,
                        Reponse_D VARCHAR(30) NOT NULL)";
                $dbco->exec($sql);
                echo 'Table bien créée !';
            }
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }

        ?>