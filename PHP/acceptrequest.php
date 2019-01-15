<?php
session_start();
include("dbconnect.php");
if(isset($_POST['acceptrequest'])){
    $id = mysqli_real_escape_string($link, $_SESSION['id']);
    $myname = mysqli_real_escape_string($link, $_SESSION['username']);

    $sql = "SELECT * FROM friendrequests WHERE touser = '$id';";
    $result = mysqli_query($link, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result)){
    $friendid = $row['fromuser'];
    $friendname = $row['currentname'];
    }


    $sql3 = "INSERT INTO friends (user1, user2, user1name, user2name) VALUES ('$id', '$friendid', '$myname', '$friendname') ;";
    $result = mysqli_query($link, $sql3);

    $sql = "DELETE FROM friendrequests WHERE touser = '$id' AND fromuser = '$friendid';";
    $result = mysqli_query($link, $sql);
    $sql2 = "DELETE FROM friendrequest WHERE touser = '$friendid' AND fromuser = '$id';";
    $result = mysqli_query($link, $sql2);



    header("Location: ../friends.php");
}
?>