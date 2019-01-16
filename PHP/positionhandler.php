<?php
session_start();
include('../PHP/dbconnect.php');
$position = $_POST['circleposition'];
$gamestring = "";
$row = $position[0];
$column = $position[1];


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
        if ("o" == $_SESSION['gamefield'][$i][$column]){
            $_SESSION['gamefield'][$i][$column] = $color;
            break;
        }

        
    }
}

$gamestring = json_encode($_SESSION['gamefield']);

// for($i = 0; $i < $_SESSION['gamesize']; $i++){
//     $gamestringpart = implode($_SESSION['gamefield'][$i]);
//     $gamestring .= $gamestringpart;

// }


    $gamestring = mysqli_real_escape_string($link ,$gamestring);
    $sql = "UPDATE games SET gamearray = '$gamestring', turn = '$chooseturn', turns = '$turns' WHERE gameid = '$gameid';";
    mysqli_query($link, $sql);
    header("Location: ../ingame.php");



 


?>