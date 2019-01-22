<?php
session_start();
include('../PHP/dbconnect.php');
include('../Includes/functions.php');
// include('../Includes/functions.php');
$position   = $_POST['circleposition'];
$gamestring = "";
$posrow     = substr($position, 0, 1);
$poscol     = substr($position, 1);
$winarray   = "q";

$_SESSION['posrow'] = $posrow;
$_SESSION['poscol'] = $poscol;



$gameid      = $_SESSION['gameid'];
$sql         = "SELECT turns FROM games WHERE gameid = '$gameid';";
$result      = mysqli_query($link, $sql);
$resultcheck = mysqli_num_rows($result);
if ($row = mysqli_fetch_assoc($result)) {
    $turns = $row['turns'];
}
if ($turns & 1) {
    $chooseturn                 = 1;
    $color                      = "w";
    $_SESSION['playerturnid']   = $_SESSION['player2'];
    $_SESSION['playerwaitid']   = $_SESSION['player1'];
    $_SESSION['playerturnname'] = $_SESSION['player2name'];
    $_SESSION['playerwaitname'] = $_SESSION['player1name'];
    $_SESSION['winchar']        = 'w';
    
} else {
    $chooseturn                 = 2;
    $color                      = "q";
    $_SESSION['playerturnid']   = $_SESSION['player1'];
    $_SESSION['playerwaitid']   = $_SESSION['player2'];
    $_SESSION['playerturnname'] = $_SESSION['player1name'];
    $_SESSION['playerwaitname'] = $_SESSION['player2name'];
    $_SESSION['winchar']        = 'q';
}
$turns++;

//checks if the game is full, and if its not continue
if (!in_array("o", $_SESSION['gamefield'][0])) {
    $gamestring   = json_encode($_SESSION['gamefield']);
    $gamestring   = mysqli_real_escape_string($link, $gamestring);
    $player1name  = mysqli_real_escape_string($link, $_SESSION['player1name']);
    $player2name  = mysqli_real_escape_string($link, $_SESSION['player2name']);
    $playerturnid = mysqli_real_escape_string($link, $_SESSION['playerturnid']);
    $playerwaitid = mysqli_real_escape_string($link, $_SESSION['playerwaitid']);
    $gamesize     = $_SESSION['gamesize'];
    $player1      = $_SESSION['player1'];
    $player2      = $_SESSION['player2'];
    
    $sql = "UPDATE users SET tie = tie + 1 WHERE ID = $playerturnid;";
    mysqli_query($link, $sql);
    
    $sql2 = "UPDATE users SET tie = tie + 1 WHERE ID = $playerwaitid;";
    mysqli_query($link, $sql2);
    
    $sql3   = "INSERT INTO endgame (user1, user2, gamearray, turns, name1, name2, gamesize, winner) VALUES ('$player1', '$player2', '$gamestring', '$turns', '$player1name', '$player2name', '$gamesize', 'none');";
    $result = mysqli_query($link, $sql3);
    
    $sql4   = "DELETE FROM games WHERE gameid = '$gameid';";
    $result = mysqli_query($link, $sql4);
    
    header("Location: ../index.php");
    exit();
} else {
    //loop checks where to place a red or yellow pin, on y
    for ($i = $_SESSION['gamesizefor']; $i > -1; $i--) {
        if ("o" == $_SESSION['gamefield'][$i][$poscol]) {
            $_SESSION['gamefield'][$i][$poscol] = $color;
            break;
        } else {
            // echo"dab";
        }
        
        
    }
}

$gamestring = json_encode($_SESSION['gamefield']);
$gamestring = mysqli_real_escape_string($link, $gamestring);
$sql        = "UPDATE games SET gamearray = '$gamestring', turn = '$chooseturn', turns = '$turns' WHERE gameid = '$gameid';";
mysqli_query($link, $sql);

checkwin();




header("Location: ../ingame.php");



?>