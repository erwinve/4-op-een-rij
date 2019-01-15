<?php
        function friendname(){
            $id = $_SESSION['id'];
            global $id;
            global $link;
            // Select everyone who is friends with the logged in account
            $sql1 = "SELECT * FROM friends WHERE user1 = '$id' OR user2 = '$id';";
            $result = mysqli_query($link, $sql1);
            $resultcheck = mysqli_num_rows($result);
            if($resultcheck > 0) {
                if($row = mysqli_fetch_assoc($result)){
                    $friendid = $row['friendid'];
                    $_SESSION['user1'] = $row['user1'];
                    $_SESSION['user2'] = $row['user2'];
                }
            }
            // if the logged in account his id is equal to user 1 it means user 2 is the friend
            if($_SESSION['user1'] == $_SESSION['id']){
                $user2 = mysqli_real_escape_string($link, $_SESSION['user2']);
                $sql3 = "SELECT * FROM users WHERE ID = '$user2';";
                $result = mysqli_query($link, $sql3);
                $resultcheck = mysqli_num_rows($result);
                if($resultcheck > 0) {
                    if($row = mysqli_fetch_assoc($result)){
                    $_SESSION['friendname'] = $row['uname'];
                    // echo $friendname;
                    }
                }   
            }
            // if the logged his id is equal to user 2 it means user 1 is the friend
            else if($_SESSION['user2'] == $_SESSION['id']){
                $user1 = mysqli_real_escape_string($link, $_SESSION['user1']);
                $sql3 = "SELECT * FROM users WHERE ID = '$user1';";
                $result = mysqli_query($link, $sql3);
                $resultcheck = mysqli_num_rows($result);
                if($resultcheck > 0) {
                    if($row = mysqli_fetch_assoc($result)){
                        $_SESSION['friendname'] = $row['uname'];
                        // echo $friendname;
                    }
                }   
            }

    }
    ?>