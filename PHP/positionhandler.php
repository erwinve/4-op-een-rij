<?php
session_start();
$position = $_POST['circleposition'];
$row = $position[0];
$column = $position[1];


//checks if the game is full, and if its not continue
if(!in_array("o" ,$_SESSION['gamefield'][0])){
    echo"fakka";
    header("../endgame.php");
} else {
    //loop checks where to place a red or yellow pin, on y
    for($i = $_SESSION['gamesizefor']; $i > -1; $i--){
        if ("o" == $_SESSION['gamefield'][$i][$row]){
            $_SESSION['gamefield'][$i][$row] = "p1red";
            print_r($_SESSION['gamefield'][$i][$row]);


            //update to database
            
            for($i = 0; $i < $_SESSION['gamesizefor']; $i++){
               $gamestring = implode($_SESSION['gamefield']);
                
            }
            header("../ingame.php");
        }
    }
}
?>