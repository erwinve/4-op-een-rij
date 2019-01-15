<?php
$pagetitle = "Pregame";
include('PHP/dbconnect.php');
include('Includes/head.php');
include('Includes/navbar.php');
?>

<div class="headerwrap">
    <div class="container text-center headerpad">
        <h1 class="display-2">4 op 'n rij</h1>
        <p class="lead">Een lijst met al je vrienden.</p>
    </div>
</div>
<div class="container">
    <?php
        $search = mysqli_real_escape_string($link, $_POST['searchfriend']);
        $sql = "SELECT * FROM users WHERE uname = '$search';";
        $result = mysqli_query($link, $sql);
        $resultcheck = mysqli_num_rows($result);
        if($resultcheck > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo '<div class="col-4">
                <form action="PHP/addfriend.php" method="POST">
               <h3>'. $row['uname'] .'</h3>
                <button type="submit" value="'.$row['uname'].'" name="add-friend" class="btn btn-primary">Add friend</button>
                </form>
                </div>';
            }
        }
        else{
            echo"Er is niemand die". $_POST['searchfriend'] ."heet";
        }
    ?>
</div>

<?php
include('Includes/footer.php');
?>