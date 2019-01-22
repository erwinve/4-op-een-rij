<?php
$pagetitle = "Ingame";
include('Includes/head.php');
include('Includes/navbar.php');
include('PHP/requirelogin.php');
?>

<div class="board">
    <form id="gameform" action="PHP/positionhandler.php" method="POST">
    <?php
        include('PHP/gamescript.php');
        $gameid = $_SESSION['gameid'];
        $sql = "SELECT * FROM games WHERE gameid = '$gameid';";
        $result = mysqli_query($link, $sql);
        if($row = mysqli_fetch_assoc($result)){
            $turns = $row['turns'];
            $user1 = $row['user1'];
            $name1 = $row['name1'];
            $user2 = $row['user2'];
            $name2 = $row['name2'];
        }

        if ( $turns & 1 ) {
            $playerturnid = $user2;
            $playerturnname = $name2;
          } else {


            $playerturnid = $user1;
            $playerturnname = $name1;
          }

        if($turns > 0){
            echo $playerturnname . " is aan de beurt";
            if ($playerturnid == $_SESSION['id']){
            echo'<input type="hidden" id="inputcircle" name="circleposition" value="NULL">';
            }
        }
        else{
            echo $name1 . " is aan de beurt";
            if ($user1 == $_SESSION['id']){
            echo'<input type="hidden" id="inputcircle" name="circleposition" value="NULL">';
            }
        }

        ?>
    </form>
</div>

<?php
include('Includes/footer.php');
?>