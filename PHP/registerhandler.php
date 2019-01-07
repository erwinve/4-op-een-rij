<?php
if(isset($_POST['submit'])){
    include_once 'dbconnect.php';

    //de variabelen defineren
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link, $_POST['password']);

    //error handling
    //check voor lege velden
    if(empty($username) ||empty($email) || empty($password)){
        header('location: ../register.php');
        exit();
    }
    else{
        //check of de email juist is
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../register.php");
            exit();
            }
            else{
                //check of de username al in de database voorkomt
                $sql = "SELECT * FROM users WHERE uname='$username'";
                $result = mysqli_query($link, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                    header('location: ../register.php');
                    exit();
                }
                else{
                    //check of de email al in de database voorkomt
                    $sql = "SELECT * FROM users WHERE email='$email'";
                    $result = mysqli_query($link, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0){
                    header('location: ../register.php');
                    exit();
                    }
                    else{
                        //password hash
                        $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

                        // user toevoegen aan de database
                        $sql = "INSERT INTO users (uname, email, pw) VALUES ('$username', '$email', '$hashedpassword');";
                        mysqli_query($link, $sql);
                        header('location: ../login.php');
                        exit();
                        }
                    }
                }
        }
    }
else{
    header('../register.php');
    exit();
}



?>