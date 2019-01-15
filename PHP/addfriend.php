<?php
session_start();
include('dbconnect.php');
if(isset($_POST['add-friend'])){
    $currentuser = mysqli_real_escape_string($link, $_SESSION['id']);
    $frienduser = mysqli_real_escape_string($link, $_POST['add-friend']);
    $myname = mysqli_real_escape_string($link, $_SESSION['username']);
    $sql1 = "SELECT * FROM users WHERE uname = '$frienduser'";
    $result = mysqli_query($link, $sql1);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result)){
        $frienduserid = mysqli_real_escape_string($link, $row['ID']);
        

        }

    
    $sql23 = "INSERT INTO friendrequests (touser, fromuser, friendname, currentname) VALUES ('$frienduserid', '$currentuser', '$frienduser', '$myname');";
    $result = mysqli_query($link, $sql23);

    header("Location: ../friends.php");
}
else{
    echo"no value given";
}
?>