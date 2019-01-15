<?php

$pagetitle = "Pregame";
include('Includes/head.php');
include('PHP/dbconnect.php');
include('Includes/navbar.php');
include('Includes/functions.php');

$gameid = $_POST['playgame'];
$sql = "SELECT * FROM games WHERE gameid = '$gameid';";
$result = mysqli_query($link, $sql);
$resultcheck = mysqli_num_rows($result);
if($row = mysqli_fetch_assoc($result)){
    $turns = $row['turns'];
}
$_SESSION['turns'] = $turns;
$_SESSION['gameid'] = $gameid;





if($_SESSION['turns'] > 0){
    header("Location: ingame.php");
}
?>

<div class="headerwrap">
    <div class="container text-center headerpad">
        <h1 class="display-2">4 op 'n rij</h1>
        <p class="lead">Kies de grootte van het bord.</p>
    </div>
</div>


<div class="container">
   <form action="ingame.php" method="POST">
    <div class="form-group">
    <label for="exampleSelect1">Select difficulty</label>
    <select class="form-control" id="exampleSelect1" name="difficultyselect">
      <option value="10">10 bij 10</option>
      <option value="15">15 bij 15</option>
      <option value="20">20 bij 20</option>
      <option value="25">25 bij 25</option>
      <option value="50">50 bij 50</option>
    </select>
     <button type="submit" class="btn btn-primary" name="difficultysubmit">Submit</button>
    </div>

</form>
</div>

<?php

include('Includes/footer.php');
?>