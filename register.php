<?php
$pagetitle = "Registeren";
include('Includes/head.php');
include('Includes/navbar.php');
?>
<div class="container">
<h1 class="form-heading">login Form</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2>
   <p>Please enter your email and password</p>
   </div>
    <form id="Login" action="PHP/registerhandler.php" method="POST">

        <div class="form-group">


            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">

        </div>

        <div class="form-group">


            <input type="text" class="form-control" id="username" name="username" placeholder="Gebruikersnaam">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="password" name="password" placeholder="Wachtwoord">

        </div>

        <button type="submit" name="submit" class="btn btn-primary">Login</button>

    </form>
    </div>
</div></div></div>


<?php
include('Includes/footer.php');
?>