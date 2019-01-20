<?php
session_start();
include('../PHP/dbconnect.php');
// include('../Includes/functions.php');
$position = $_POST['circleposition'];
$gamestring = "";
$posrow = substr($position, 0, 1);
$poscol = substr($position, 1);
$winarray = "q";


$gameid = $_SESSION['gameid'];
$sql = "SELECT turns FROM games WHERE gameid = '$gameid';";
$result = mysqli_query($link, $sql);
$resultcheck = mysqli_num_rows($result);
if($row = mysqli_fetch_assoc($result)){
    $turns = $row['turns'];
}
if ( $turns & 1 ) {
    $chooseturn = 1;
    $color = "q";
  } else {
    $chooseturn = 2;
    $color = "w";
  }
  $turns++;

//checks if the game is full, and if its not continue
if(!in_array("o" ,$_SESSION['gamefield'][0])){
    header("../endgame.php");
} else {
    //loop checks where to place a red or yellow pin, on y
    for($i = $_SESSION['gamesizefor']; $i > -1; $i--){
        if ("o" == $_SESSION['gamefield'][$i][$poscol]){
            $_SESSION['gamefield'][$i][$poscol] = $color;
            break;
        }
        else{
            // echo"dab";
        }

        
    }
    }

    $gamestring = json_encode($_SESSION['gamefield']);
    $gamestring = mysqli_real_escape_string($link ,$gamestring);
    $sql = "UPDATE games SET gamearray = '$gamestring', turn = '$chooseturn', turns = '$turns' WHERE gameid = '$gameid';";
    mysqli_query($link, $sql);

    //check southwest
    $i = 1;
    $ir = $posrow;
    $ic = $poscol;
    while($i < 5){
        if(($_SESSION['gamefield'][$ir][$ic] == $winarray) && ($i == 4)){
            header("Location: ../index.php");
            break;
            
        }
        elseif($_SESSION['gamefield'][$ir][$ic] == $winarray){
            $ir++;
            $ic++;
        }
        else{
            header("Location: ../ingame.php");
            break;
            
        }
        $i++;
    }


    



 


?>