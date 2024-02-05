<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess PHP from Badruzzaman Nafiz</title>
</head>
<body>
    <h1>Welcome to my guessing game</h1>
    <p>
        <?php
        if(!isset($_GET['guess'])){
            echo "Missing guess parameter";
        }else{
            $guess = $_GET['guess'];

            if(empty($guess)){
                echo "Your guess is too short";
            }elseif(!is_numeric($guess)){
                echo "Your guess is not a number";
            }elseif($guess < 42){
                echo "Your guess is too low";
            }elseif($guess > 42){
                echo "Your guess is too high";
            }elseif($guess == 42){
                echo "Congratulations - You are right";
            }
        }
        ?>
    </p>
</body>
</html>