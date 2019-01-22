<?php
session_start();
include('dbconnect.php');
if (isset($_POST['invitefriend'])) {
    $currentuser = mysqli_real_escape_string($link, $_SESSION['id']);
    $frienduser  = mysqli_real_escape_string($link, $_POST['invitefriend']);
    $myname      = mysqli_real_escape_string($link, $_SESSION['username']);
    $sql1        = "SELECT * FROM users WHERE uname = '$frienduser'";
    $result      = mysqli_query($link, $sql1);
    $resultcheck = mysqli_num_rows($result);
    if ($row = mysqli_fetch_assoc($result)) {
        $frienduserid = mysqli_real_escape_string($link, $row['ID']);
        
        
    }
    
    
    $sql23  = "INSERT INTO gamerequest (requestfrom, requestto, fromname, toname) VALUES ('$currentuser', '$frienduserid', '$myname', '$frienduser');";
    $result = mysqli_query($link, $sql23);
    
    header("Location: ../friends.php");
}

?>