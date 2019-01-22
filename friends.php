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

<div class="searchfriendwrap">
    <div class="container text-center headerpad">
        <h1 class="display-4">Zoek vrienden</h1>
        <form action="searchfriends.php" method="POST">
            <input type="text" id="searchinput" name="searchfriend">
            <button class="btn btn-primary" type="submit" name="friendsearchsubmit">Zoek</button>
        </form>
    </div>
</div>

<div class="requestwrap">
    <div class="container text-center headerpad">
        <h1 class="display-4">Inkomende verzoeken</h1>
        <?php

$id = mysqli_real_escape_string($link, $_SESSION['id']);





//select all friendrequests that are towards the loggedin user
$sql         = "SELECT * FROM friendrequests WHERE touser = '$id';";
$result      = mysqli_query($link, $sql);
$resultcheck = mysqli_num_rows($result);
if ($resultcheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $friendname = $row['currentname'];
        echo '<div class="col-4">
                    <form action="PHP/acceptrequest.php" method="POST">
                    <h3>' . $friendname . '</h3>
                    <button value="' . $friendname . '" class="btn btn-primary" name="acceptrequest" type="submit">Accepteer verzoek</button>
                    </form>
                    </div>';
    }
}
?>
    </div>
</div>


<div class="container">
<form action ="PHP/invitegame.php" method="POST">
    <?php
//Select all from friends
$sql2        = "SELECT * FROM friends WHERE user1 = '$id' OR user2 = '$id';";
$result      = mysqli_query($link, $sql2);
$resultcheck = mysqli_num_rows($result);

if ($resultcheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // friendname();
        if ($id == $row['user1']) {
            $friendname = $row['user2name'];
        } elseif ($id == $row['user2']) {
            $friendname = $row['user1name'];
        }
        echo '<div class="col-2">
                <div class="card">
                <img src="Images\default.png" class="card-img-top" alt="profilepicture">
                <div class="card-body">
                <div class="text-center">
                <h5 class="card-title">' . $friendname . '</h5>
                <button type="submit" value="' . $friendname . '" name="invitefriend" class="btn btn-primary">Invite</button>
                </div>
                </div>
                </div>
                </div>';
    }
}

?>


</form>
</div>

<?php
include('Includes/footer.php');
?>