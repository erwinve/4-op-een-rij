<?php
   include('../PHP/dbconnect.php');
   function checkwin(){
       global $link;
       
        $playerturnid = mysqli_real_escape_string($link, $_SESSION['playerturnid']);
        $playerwaitid = mysqli_real_escape_string($link, $_SESSION['playerwaitid']);
        $posrow = $_SESSION['posrow'];
        $poscol = $_SESSION['poscol'];
        $winchar = $_SESSION['winchar'];
        $gamestring = json_encode($_SESSION['gamefield']);
        $gamestring = mysqli_real_escape_string($link ,$gamestring);
        $player1name = mysqli_real_escape_string($link, $_SESSION['player1name']);
        $player2name = mysqli_real_escape_string($link, $_SESSION['player2name']);
        $playerturnid = mysqli_real_escape_string($link, $_SESSION['playerturnid']);
        $playerwaitid = mysqli_real_escape_string($link, $_SESSION['playerwaitid']);
        $playerturnname = mysqli_real_escape_string($link, $_SESSION['playerturnname']);
        $playerwaitname = mysqli_real_escape_string($link, $_SESSION['playerwaitname']);
        $turns = $_SESSION['turns'];
        $gamesize = $_SESSION['gamesize'];
        $player1 = $_SESSION['player1'];
        $player2 = $_SESSION['player2'];
        $gameid = $_SESSION['gameid'];
   
   
   
       //check south
       $i = 1;
       $ir = $posrow;
       while($i < 5){
               if($_SESSION['gamefield'][$ir][$poscol] == $winchar && $i == 4){
   
                   $sql = "UPDATE users SET wongames = wongames + 1 WHERE ID = $playerturnid;";
                   mysqli_query($link, $sql);
       
                   $sql2 = "UPDATE users SET lostgames = lostgames + 1 WHERE ID = $playerwaitid;";
                   mysqli_query($link, $sql2);
   
                   $sql3 = "INSERT INTO endgame (endgameid, user1, user2, gamearray, turns, name1, name2, gamesize, winner) VALUES ('$gameid', '$player1', '$player2', '$gamestring', '$turns', '$player1name', '$player2name', '$gamesize', '$playerturnname');";
                   $result = mysqli_query($link, $sql3);
               
                   $sql4 = "DELETE FROM games WHERE gameid = '$gameid';";
                   $result = mysqli_query($link, $sql4);
   
                   header("Location: ../endgame.php");
                   exit();
                   
               }
               elseif($_SESSION['gamefield'][$ir][$poscol] == $winchar){
               $ir++;
           }
           else{
               break;
               
           }
           $i++;
       }
   
       $i = 1;
       $ic = $poscol;
       //check east
       while($i < 5){
           if($_SESSION['gamefield'][$posrow][$ic] == $winchar && $i == 4){
   
               $sql = "UPDATE users SET wongames = wongames + 1 WHERE ID = $playerturnid;";
               mysqli_query($link, $sql);
   
               $sql2 = "UPDATE users SET lostgames = lostgames + 1 WHERE ID = $playerwaitid;";
               mysqli_query($link, $sql2);
   
               $sql3 = "INSERT INTO endgame (endgameid, user1, user2, gamearray, turns, name1, name2, gamesize, winner) VALUES ('$gameid', '$player1', '$player2', '$gamestring', '$turns', '$player1name', '$player2name', '$gamesize', '$playerturnname');";
               $result = mysqli_query($link, $sql3);
           
               $sql4 = "DELETE FROM games WHERE gameid = '$gameid';";
               $result = mysqli_query($link, $sql4);
   
               header("Location: ../endgame.php");
               exit();
               
           }
           elseif($_SESSION['gamefield'][$posrow][$ic] == $winchar){
               $ic++;
           }
           else{
               break;
               
           }
           $i++;
       }
   
       //check west
       $i = 1;
       $ic = $poscol;
       while($i < 5){
           if($_SESSION['gamefield'][$posrow][$ic] == $winchar && $i == 4){
   
               $sql = "UPDATE users SET wongames = wongames + 1 WHERE ID = $playerturnid;";
               mysqli_query($link, $sql);
   
               $sql2 = "UPDATE users SET lostgames = lostgames + 1 WHERE ID = $playerwaitid;";
               mysqli_query($link, $sql2);
   
               $sql3 = "INSERT INTO endgame (endgameid, user1, user2, gamearray, turns, name1, name2, gamesize, winner) VALUES ('$gameid', '$player1', '$player2', '$gamestring', '$turns', '$player1name', '$player2name', '$gamesize', '$playerturnname');";
               $result = mysqli_query($link, $sql3);
           
               $sql4 = "DELETE FROM games WHERE gameid = '$gameid';";
               $result = mysqli_query($link, $sql4);
   
               header("Location: ../endgame.php");
               exit();
               
           }
           elseif($_SESSION['gamefield'][$posrow][$ic] == $winchar){            
               $ic--;
           }
           else{
               break;
               
           }
           $i++;
       }
   
       //check southeast
       $i = 1;
       $ir = $posrow;
       $ic = $poscol;
       while($i < 5){
           if($_SESSION['gamefield'][$ir][$ic] == $winchar && $i == 4){
   
               $sql = "UPDATE users SET wongames = wongames + 1 WHERE ID = $playerturnid;";
               mysqli_query($link, $sql);
   
               $sql2 = "UPDATE users SET lostgames = lostgames + 1 WHERE ID = $playerwaitid;";
               mysqli_query($link, $sql2);
   
               $sql3 = "INSERT INTO endgame (endgameid, user1, user2, gamearray, turns, name1, name2, gamesize, winner) VALUES ('$gameid', '$player1', '$player2', '$gamestring', '$turns', '$player1name', '$player2name', '$gamesize', '$playerturnname');";
               $result = mysqli_query($link, $sql3);
           
               $sql4 = "DELETE FROM games WHERE gameid = '$gameid';";
               $result = mysqli_query($link, $sql4);
   
               header("Location: ../endgame.php");
               exit();
               
           }
           elseif($_SESSION['gamefield'][$ir][$ic] == $winchar){         
               $ic++;
               $ir++;
           }
           else{
               break;
               
           }
           $i++;
       }
   
       //check southwest
       $i = 1;
       $ir = $posrow;
       $ic = $poscol;
       while($i < 5){
           if($_SESSION['gamefield'][$ir][$ic] == $winchar && $i == 4){
   
               $sql = "UPDATE users SET wongames = wongames + 1 WHERE ID = $playerturnid;";
               mysqli_query($link, $sql);
   
               $sql2 = "UPDATE users SET lostgames = lostgames + 1 WHERE ID = $playerwaitid;";
               mysqli_query($link, $sql2);
   
               $sql3 = "INSERT INTO endgame (endgameid, user1, user2, gamearray, turns, name1, name2, gamesize, winner) VALUES ('$gameid', '$player1', '$player2', '$gamestring', '$turns', '$player1name', '$player2name', '$gamesize', '$playerturnname');";
               $result = mysqli_query($link, $sql3);
           
               $sql4 = "DELETE FROM games WHERE gameid = '$gameid';";
               $result = mysqli_query($link, $sql4);
   
               header("Location: ../endgame.php");
               exit();
               
           }
           elseif($_SESSION['gamefield'][$ir][$ic] == $winchar){
               $ic--;
               $ir++;
           }
           else{
               break;
               
           }
           $i++;
       }
   }
   
   
               
       ?>