<?php
session_start();
include("dbconnect.php");
if (isset($_POST['acceptgamerequest'])) {
    $id          = mysqli_real_escape_string($link, $_SESSION['id']);
    $myname      = mysqli_real_escape_string($link, $_SESSION['username']);
    $friendname  = mysqli_real_escape_string($link, $_POST['acceptgamerequest']);
    $sql         = "SELECT * FROM gamerequest WHERE fromname = '$friendname' AND requestto = '$id';";
    $result      = mysqli_query($link, $sql);
    $resultcheck = mysqli_num_rows($result);
    if ($row = mysqli_fetch_assoc($result)) {
        $friendid   = $row['requestfrom'];
        $friendname = $row['fromname'];
    } else {
        echo "fakka";
    }
    
    
    
    $sql3   = "INSERT INTO games (user1, user2, name1, name2) VALUES ('$id', '$friendid', '$myname', '$friendname');";
    $result = mysqli_query($link, $sql3);
    
    $sql    = "DELETE FROM gamerequest WHERE requestfrom = '$id' AND requestto = '$friendid';";
    $result = mysqli_query($link, $sql);
    $sql2   = "DELETE FROM gamerequest WHERE requestfrom = '$friendid' AND requestto = '$id';";
    $result = mysqli_query($link, $sql2);
    
    
    
    header("Location: ../pregame.php");
}
?>