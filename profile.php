<?php
$pagetitle = "Pregame";
include('PHP/dbconnect.php');
include('Includes/head.php');
include('Includes/navbar.php');
include('PHP/requirelogin.php');
?>

<div class="headerwrap">
    <div class="container text-center headerpad">
        <h1 class="display-2">4 op 'n rij</h1>
        <p class="lead">Een lijst met al je vrienden.</p>
    </div>
</div>

<div class="container">
<?php
    $id = mysqli_real_escape_string($link, $_SESSION['id']);
    			$sql = "SELECT * FROM users WHERE ID = '$id';";
                $result = mysqli_query($link, $sql);
                $resultcheck = mysqli_num_rows($result);
                if($row = mysqli_fetch_assoc($result)){
                $wongames = $row['wongames'];
                $lostgames = $row['lostgames'];
                }
                $totalgames = $wongames + $lostgames;
                $winlossratio = round($wongames / $totalgames * 100, 2);

            echo"<p>Je hebt " . $wongames . " keer gewonnen, en " . $lostgames . " keer verloren</p>";
            echo"<p>Je win/verlies verhouding is " . $winlossratio . "%</p>";
?>
</div>


<?php
include('Includes/footer.php');
?>